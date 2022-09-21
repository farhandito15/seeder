<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            'nama' => 'Farhan Dito',
            'jeniskelamin' => 'Pria',
            'email' => 'farditbilhar@gmail.com'
        ]);

        DB::table('pegawai')->insert([
            'nama' => 'JamesKun',
            'jeniskelamin' => 'Pria',
            'email' => 'james321@gmail.com'
        ]);
    }
}
