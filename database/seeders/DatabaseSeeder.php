<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('kategoris')->insert([
            'nama_kategori' => 'Router',
        ]);
        DB::table('kategoris')->insert([
            'nama_kategori' => 'Access Point',
        ]);
        DB::table('logs')->insert([
            'tanggal' => '2023-12-1',
            'ket' => 'Masuk',
            'deskripsi' => '-'
        ]);
        DB::table('logs')->insert([
            'tanggal' => '2023-12-2',
            'ket' => 'Keluar',
            'deskripsi' => '-'
        ]);

        DB::table('barangs')->insert([
            'kategori_id' => 1,
            'log_id' => 1,
            'nama_barang' => 'Mikrotik RB450',
            'jenis_barang' => 'Mikrotik',
            'kode_barang' => 'SN-G2212320',
            'kondisi' => 'Baik',
        ]);
        DB::table('barangs')->insert([
            'kategori_id' => 1,
            'log_id' => 1,
            'nama_barang' => 'Mikrotik RB450',
            'jenis_barang' => 'Mikrotik',
            'kode_barang' => 'SN-G2212322',
             'kondisi' => 'Baik',
        ]);
        DB::table('barangs')->insert([
            'kategori_id' => 2,
            'log_id' => 1,
            'nama_barang' => 'Unifi',
            'jenis_barang' => 'Access Point',
            'kode_barang' => 'SN-G2212322',
             'kondisi' => 'Baik',
        ]);



        DB::table('log_barangs')->insert([
            'kategori_id' => '1',
            'log_id' => '2',
            'qty'=> '1'
        ]);
        DB::table('log_barangs')->insert([
            'kategori_id' => '2',
            'log_id' => '1',
            'qty'=> '1'
        ]);
        DB::table('log_barangs')->insert([
            'kategori_id' => '1',
            'log_id' => '1',
            'qty'=> '1'
        ]);

        \App\Models\Barang::factory(50)->create();
    }




}
