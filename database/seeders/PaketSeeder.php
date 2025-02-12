<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $paket = [[
            'id_outlet' => '1',
            'jenis' => 'kiloan',
            'nama_paket' => 'gozi',
            'harga' => '12000'
        ]];

        foreach ($paket as $index) {
            Paket::insert($index);
        }
    }
}
