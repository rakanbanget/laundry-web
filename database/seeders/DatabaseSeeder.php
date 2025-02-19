<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Outlet;
use App\Models\Paket;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Carbon\Carbon;
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

        // $outlet = [[
        //     'nama' => 'Outlet 1',
        //     'alamat' => 'Jakarta 123',
        //     'tlp' => '081238912'
        // ]];

        $data = [[
            'id_outlet'      => 1,
            'kode_invoice'   => 'INV-578',
            'id_member'      => 1,
            'tgl'            => Carbon::now(),
            'batas_waktu'    => Carbon::now()->addDays(3),
            'tgl_bayar'      => Carbon::now()->addDays(3),
            'biaya_tambahan' => 0,
            'diskon'         => 0,
            'pajak'          => 0,
            'status'         => 'baru',
            'dibayar'        => 'belum_dibayar',
            'id_user'        => 1,
        ]];

        // $pakets = [[
        //     'id_outlet' => '1',
        //     'jenis' => 'kiloan',
        //     'nama_paket' => 'gozi',
        //     'harga' => '12000'
        // ]];
        

        // foreach ($pakets as $index) {
        //     Paket::insert($index);
        // }

        foreach ($data as $index) {
            Transaksi::insert($index);
        }
    }
}
