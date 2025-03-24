<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\JadwalSholatService;

class JadwalSholatController extends Controller
{
    protected $jadwalSholatService;

    public function __construct(JadwalSholatService $jadwalSholatService)
    {
        $this->jadwalSholatService = $jadwalSholatService;
    }

    public function index(Request $request)
    {
        // Ambil parameter 'city' dari query string, default ke 'jakarta' jika tidak ada input
        $city = $request->input('city', 'jakarta');

        try {
            $jadwal = $this->jadwalSholatService->getJadwalByCity($city);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return view('jadwal-sholat.index', ['jadwal' => $jadwal]);
        // return response()->json($jadwal);
    }
}
