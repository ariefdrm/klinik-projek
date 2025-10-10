<?php

namespace Database\Seeders;

use App\Models\pasien;
use Database\Factories\PasienFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        pasien::factory(100)->create();
    }
}
