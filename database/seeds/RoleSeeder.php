<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['type' => 'admin'],
            ['type' => 'user'],
            ['type' => 'kdpm']
        ]);
    }
}
