<?php

use Illuminate\Database\Seeder;

class LaboratorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laboratories')->insert([
            ['name' => 'Manajemen Informasi'],
            ['name' => 'Algoritma dan Pemrograman'],
            ['name' => 'Laboratorium Pemrograman 2'],
            ['name' => 'Mobile Inovation Studio'],
            ['name' => 'Arsitektur dan Jaringan Komputer'],
            ['name' => 'Laboratorium Pemrograman'],
            ['name' => 'Komputasi Cerdas dan Visi'],
            ['name' => 'Net Centric Computing'],
            ['name' => 'Rekayasa Perangkat Lunak']
        ]);
    }
}
