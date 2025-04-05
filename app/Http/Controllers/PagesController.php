<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Gallery;
use App\Models\Management;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\JadwalSholatService;
use App\Http\Controllers\JadwalSholatController;

class PagesController extends Controller
{
    protected $jadwalSholatService;

    public function __construct(JadwalSholatService $jadwalSholatService)
    {
        $this->jadwalSholatService = $jadwalSholatService;
    }

    public function index(Request $request)
    {
        $configs = Config::first();

        // jadwal sholat
        $defaultCity = $configs->masque_city;
        $jadwal = $this->getJadwalSholat($request, $defaultCity);

        // ambil data management
        $managementData = $this->getManagementData();

        // ambil data gallery
        $galleries = $this->getGallery();





        return view('landingPage', [
            'jadwal' => $jadwal,
            'configs' => $configs,
            'management' => $managementData,
            'galleries' => $galleries,
        ]);
    }

    public function getJadwalSholat(Request $request, string $city)
    {
        // Ambil parameter 'city' dari query string, default ke 'configs->city'
        $city = $request->input('city', $city);
        try {
            $jadwal = $this->jadwalSholatService->getJadwalByCity($city);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return $jadwal;
    }

    public function getManagementData()
    {
        // ambil semua data management, jika reveal_contact dinonaktifkan buat data email dan telp kosong, jika aktif ambil data dari management
        $management = Management::all();
        $managementData = [];
        foreach ($management as $item) {
            if ($item->reveal_contact) {
                $managementData[] = [
                    'name' => $item->name,
                    'position' => $item->position,
                    'image' => $item->image,
                    'email' => $item->email,
                    'phone' => $item->phone,
                ];
            } else {
                $managementData[] = [
                    'name' => $item->name,
                    'position' => $item->position,
                    'image' => $item->image,
                    'email' => null,
                    'phone' => null,
                ];
            }
        }


        return $managementData;
    }


    public function getGallery()
    {
        $galleries = Gallery::all();


        return $galleries;
    }
}
