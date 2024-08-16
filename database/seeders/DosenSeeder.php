<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosen')->insert([
            [
                'user_id' => 2, // Ganti dengan ID user yang valid
                'kelas_id' => null, // Ganti dengan ID kelas yang valid
                'kode_dosen' => 101,
                'nip' => 123450,
                'name' => 'Wachid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Ganti dengan ID user yang valid
                'kelas_id' => null, // Ganti dengan ID kelas yang valid
                'kode_dosen' => 102,
                'nip' => 123451,
                'name' => 'Agus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4, // Ganti dengan ID user yang valid
                'kelas_id' => null, // Ganti dengan ID kelas yang valid
                'kode_dosen' => 103,
                'nip' => 123452,
                'name' => 'Lutfi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5, // Ganti dengan ID user yang valid
                'kelas_id' => null, // Ganti dengan ID kelas yang valid
                'kode_dosen' => 104,
                'nip' => 123453,
                'name' => 'Novi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6, // Ganti dengan ID user yang valid
                'kelas_id' => null, // Ganti dengan ID kelas yang valid
                'kode_dosen' => 105,
                'nip' => 123454,
                'name' => 'Rostika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data dosen lainnya sesuai kebutuhan
        ]);
    }
}
