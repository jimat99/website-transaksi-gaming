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
            'nama'        => 'Valk Manteau',
            'harga'       => 2000,
            'path_gambar' => 'images/item/manteau.png',
            'deskripsi'   => 'A set of shining white armor worn by Valkyries, the battle maidens that serve the god Odin. All Stats + 1 Indestructible (except in upgrade attempts). [Mage, Archer, Acolyte Class] Increase resistance to Silence status by 50%. [Swordman, Merchant, Thief Class] Increase resistance to Stun status by 50%. [Valkyrie Helm & Valkyrja\'s Armor & Valkyrja\'s Manteau & Valkyrja\'s Shoes Equip Set] More Information on Combo: Valkyrian Armor[1] , Valkyrian Shoes[1] , Valkyrian Manteau[1] & Valkyrie Helm[1].'
        ]);

        DB::table('item')->insert([
            'nama'        => 'Valk Armor',
            'harga'       => 1500,
            'path_gambar' => 'images/item/armor.png',
            'deskripsi'   => 'A manteau that is worn by the Valkyries, Odin\'s battle maidens. Indestructible (except in upgrade attempts). [Mage, Archer, Acolyte Class] Perfect Dodge + 5 Increases Perfect Dodge by (upgrade level*2). [Swordman, Merchant, Thief Class] Reflect 5% melee damage back to enemies. Increases percentage reflect damage by (upgrade level*2). [Valkyrie Helm & Valkyrja\'s Armor & Valkyrja\'s Manteau & Valkyrja\'s Shoes Equip Set] More Information on Combo: Valkyrian Armor[1] , Valkyrian Shoes[1] , Valkyrian Manteau[1] & Valkyrie Helm[1].'
        ]);
        //
        
        // Seeder admin
        DB::table('admin')->insert([
            'email'    => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('admin1234'),
            'position' => 'GM Author',
            'age'      => 21
        ]);

        DB::table('admin')->insert([
            'email'    => 'gmpanda@gmail.com',
            'username' => 'GM Panda',
            'password' => Hash::make('gmpanda1234'),
            'position' => 'GM Event',
            'age'      => 35
        ]);

        DB::table('admin')->insert([
            'email'    => 'gmpolkadot@gmail.com',
            'username' => 'GM Polkadot',
            'password' => Hash::make('gmpolkadot1234'),
            'position' => 'GM Director',
            'age'      => 44,
            'status'   => 0
        ]);
        //

        // Seeder player
        DB::table('player')->insert([
            'email'      => 'iqbal@gmail.com',
            'username'   => 'iqbal',
            'password'   => Hash::make('iqbal1234'),
            'gender'     => 'Male',
            'birth_date' => '2000-01-01',
            'cash'       => 10000
        ]);
        
        DB::table('player')->insert([
            'email'      => 'nicholas@gmail.com',
            'username'   => 'nicholas',
            'password'   => Hash::make('nicholas1234'),
            'gender'     => 'Male',
            'birth_date' => '2000-02-02',
            'cash'       => 20000
        ]);

        DB::table('player')->insert([
            'email'      => 'bima@gmail.com',
            'username'   => 'bima',
            'password'   => Hash::make('bima1234'),
            'gender'     => 'Male',
            'birth_date' => '2000-03-03',
            'cash'       => 30000
        ]);

        DB::table('player')->insert([
            'email'      => 'demit@gmail.com',
            'username'   => 'Demit Kolor Polkadot',
            'password'   => Hash::make('dmit1234'),
            'gender'     => 'Male',
            'birth_date' => '2005-10-05',
            'cash'       => 40000
        ]);

        DB::table('player')->insert([
            'email'      => 'magnetism@gmail.com',
            'username'   => 'Magnetism',
            'password'   => Hash::make('magnetism1234'),
            'gender'     => 'Male',
            'birth_date' => '2003-11-23',
            'cash'       => 50000
        ]);

        DB::table('player')->insert([
            'email'      => 'appolo@gmail.com',
            'username'   => 'ap0ll0',
            'password'   => Hash::make('apollo1234'),
            'gender'     => 'Female',
            'birth_date' => '2004-05-18',
            'cash'       => 100000
        ]);

        DB::table('player')->insert([
            'email'      => 'ximenx@gmail.com',
            'username'   => 'ximenx',
            'password'   => Hash::make('ximenx1234'),
            'gender'     => 'Female',
            'birth_date' => '2007-03-26',
            'cash'       => 7000,
            'status'     => 0
        ]);
        //
    }
}
