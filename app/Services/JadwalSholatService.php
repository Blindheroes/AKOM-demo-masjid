<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class JadwalSholatService
{

    protected $baseUrl = 'https://api.myquran.com/v2/sholat';

    public function getCityCode($city)
    {
        // Cache city code for 1 day (1440 minutes)
        return Cache::remember("city_code_{$city}", 1440, function () use ($city) {
            $response = Http::get("{$this->baseUrl}/kota/cari/{$city}");

            if ($response->successful() && isset($response->json()['data'][0]['id'])) {
                return $response->json()['data'][0]['id'];
            }

            throw new \Exception('Gagal mengambil data kode kota dari API.');
        });
    }

    public function getJadwalByCity($city)
    {
        $cityCode = $this->getCityCode($city);
        $date = date('Y/m/d');

        // Cache prayer schedule for 1 day (1440 minutes)
        return Cache::remember("jadwal_sholat_{$cityCode}_{$date}", 1440, function () use ($cityCode, $date) {
            $response = Http::get("{$this->baseUrl}/jadwal/{$cityCode}/{$date}");

            if ($response->successful() && isset($response->json()['data'])) {
                return $response->json()['data'];
            }

            throw new \Exception('Gagal mengambil data jadwal sholat dari API.');
        });
    }
}
