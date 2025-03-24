<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function demoLandingPage()
    {
        $mosque_info = [
            'name' => 'Masjid Al-Munawar',
            'address' => 'Jl. Raya Ciputat Parung No. 1, Ciputat, Tangerang Selatan',
            'phone' => '021-1234567',
            'email' => 'almunawir@akom.dev',
            'instagram' => 'https://www.instagram.com/masjidalmunawar/',
            'facebook' => 'https://www.facebook.com/masjidalmunawar/',
            'youtube' => 'https://www.youtube.com/@almunawir',
            'logo' => 'https://via.placeholder.com/150',
            'maps_link' => 'https://goo.gl/maps/1234567',

        ];

        $prayer_times = [
            'fajr' => '06.00',
            'dhuhr' => '06.00',
            'asr' => '06.00',
            'maghrib' => '06.00',
            'isha' => '06.00',
        ];

        $upcoming_events = Event::upcoming()->get();
        $news = News::latest()->limit(5)->get();

        $mosque_management =
            [
                ['name' => 'Ahmad Fauzi', 'position' => 'Chairman'],
                ['name' => 'Siti Aminah', 'position' => 'Treasurer'],
                ['name' => 'Muhammad Yusuf', 'position' => 'Secretary'],
                ['name' => 'Fatimah Zahra', 'position' => 'Event Coordinator'],
                ['name' => 'Ali Hasan', 'position' => 'Public Relations'],
            ];


        return view('demo.landingPage');

        return response()->json([
            'mosque_info' => $mosque_info,
            'prayer_times' => $prayer_times,
            'upcoming_events' => $upcoming_events,
            'news' => $news,
            'mosque_management' => $mosque_management,
        ], 200);
    }
}
