<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Outlet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $outlet = [[
            'nama' => 'Outlet 1',
            'alamat' => 'Jakarta 123',
            'tlp' => '081238912'
        ]];

        $data = [[
            'nama' => 'Rakan123',
            'username' => 'rakan',
            'password' => Hash::make('123'),
            'id_outlet'=> 1,
            'role' => 'admin'
        ]];

        foreach($outlet as $index) {
            Outlet::insert($index);
        }

        foreach ($data as $index) {
            User::insert($index);
        }
    }
}
