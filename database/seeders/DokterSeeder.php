<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokter')->insert([
            'nama' => 'Todi Surodi',
            'spesialis' => 'Mata',
            'exp' => '3',
            'usia' => '34'
        ]);
    }
}
