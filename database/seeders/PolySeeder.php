<?php

namespace Database\Seeders;

use App\Models\Poly;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PolySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $now = Carbon::now();
        $data = [
             ['nama' => 'Poli Gigi', 'biaya' => 100000, 'created_at' => $now, 'updated_at' => $now],
             ['nama' => 'Poli Anak', 'biaya' => 150000, 'created_at' => $now, 'updated_at' => $now],
             ['nama' => 'Poli Jantung', 'biaya' => 100000, 'created_at' => $now, 'updated_at' => $now],
         ];

        Poly::insert($data);
    }
}
