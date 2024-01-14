<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Customer;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('123'),
        ]);

        Customer::create([
            'nama' => 'cus',
            'username' => 'cus',
            'password' => bcrypt('222'),
            'alamat' => 'jll',
            'no_telp' => '08136712684',
        ]);
    }
}
