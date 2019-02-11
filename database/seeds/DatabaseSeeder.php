<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'username' =>  "gudang",
            'email' => "gudang@yufaza.com",
            'first_name' => 'Gudang',
            'last_name' => 'Guy',
            'password' => Hash::make('gudang'),
            'role' => 'gudang'
         ]);
         App\User::create([
            'username' =>  "pemasaran",
            'email' => "pemasaran@yufaza.com",
            'first_name' => 'Pemasaran',
            'last_name' => 'Guy',
            'password' => Hash::make('pemasaran'),
            'role' => 'pemasaran'
         ]);
         App\User::create([
            'username' =>  "admin",
            'email' => "admin@yufaza.com",
            'first_name' => 'Admin',
            'last_name' => 'Guy',
            'password' => Hash::make('admin'),
            'role' => 'admin'
         ]);
         App\Product::create([
            'product_name' =>  "Telur Ayam Kampung 200 Kg",
            'stock' => 100,
            'price' => 2000000.00
         ]);
    }
}
