<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Config>
 */
class ConfigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'masque_name' => 'Masjid Agung Al-Azhar',
            'masque_email' => 'alazhar@masque.com',
            'masque_telp' => '021-12345678',
            'masque_address' => 'Jl. Masjid No. 1',
            'masque_city' => 'Bandung',
        ];
    }
}
