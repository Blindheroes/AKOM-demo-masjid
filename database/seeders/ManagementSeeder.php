<?php

namespace Database\Seeders;

use App\Models\Management;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Management::factory(10)
            ->create();
    }
}
