<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeder role
        DB::table('role')->insert([
            'nama' => 'admin'
        ]);

        DB::table('role')->insert([
            'nama' => 'player'
        ]);
        //

        // Seeder item
        DB::table('item')->insert([
            'nama'  => 'Broken Blade',
            'harga' => 500
        ]);

        DB::table('item')->insert([
            'nama'  => 'Edelweiss',
            'harga' => 700
        ]);

        DB::table('item')->insert([
            'nama'  => 'Orcish Voucher',
            'harga' => 700
        ]);
        //
        
        // Seeder admin
        DB::table('admin')->insert([
            'email'    => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('admin1234'),
            'id_role'  => 1
        ]);
        //

        // Seeder player
        DB::table('player')->insert([
            'email'    => 'iqbal@gmail.com',
            'username' => 'iqbal',
            'password' => Hash::make('iqbal1234'),
            'cash'     => 1000,
            'id_role'  => 2
        ]);
        
        DB::table('player')->insert([
            'email'    => 'nicholas@gmail.com',
            'username' => 'nicholas',
            'password' => Hash::make('nicholas1234'),
            'cash'     => 2000,
            'id_role'  => 2
        ]);

        DB::table('player')->insert([
            'email'    => 'bima@gmail.com',
            'username' => 'bima',
            'password' => Hash::make('bima1234'),
            'cash'     => 3000,
            'id_role'  => 2
        ]);
        //
    }
}
