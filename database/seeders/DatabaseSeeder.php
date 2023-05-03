<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Produk;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Produk::create([
            'nama_produk' => 'Vario',
            'keterangan' => 'Tahun rilis 2023',
            'harga' => 10000000,
            'jumlah' => 3,
        ]);

        Produk::create([
            'nama_produk' => 'Nmax',
            'keterangan' => 'Tahun rilis 2023',
            'harga' => 20000000,
            'jumlah' => 5,
        ]);

        Produk::create([
            'nama_produk' => 'XmAX',
            'keterangan' => 'Tahun rilis 2023',
            'harga' => 30000000,
            'jumlah' => 2,
        ]);
    }
}
