<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class googleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Cek apakah user sudah ada di database
            $user = User::where('email', $googleUser->getEmail())->first();

            // Jika belum ada, buat user baru dengan role 'user'
            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => bcrypt('password^*&*%^^&%^&ftyffdddt4e4FG&FFYFDFYU__+=Gtyff'), // Dummy password
                    'google_id' => $googleUser->getId(),
                    'role' => 'user', // User default
                    'subscribed' => true,
                ]);
            }

            // Login user
            Auth::login($user);

            // Redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect('/admin'); // Filament dashboard
                # code...
            } else {
                return redirect('/'); // Halaman user biasa
            }
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Gagal login dengan Google');
        };
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
