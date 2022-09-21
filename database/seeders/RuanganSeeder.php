<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruangan')->insert([
            'idk' => 'KB01',
            'jenis_kamar' => 'Kamar Bersalin',
            'nm_penjaga' => 'Siti Rohaini'
        ]);
    }
}
