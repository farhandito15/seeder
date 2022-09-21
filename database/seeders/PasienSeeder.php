<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasien')->insert([
            'nama' => 'Jayabaya',
            'tgl_lahir' => '2002-02-12',
            'usia' => '17',
            'penyakit' => 'Demam Berdarah Biru',

        ]);
    }
}
