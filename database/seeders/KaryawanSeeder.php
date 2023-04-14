<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;


class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
   {
        Karyawan::updateOrCreate([
            'nik' => '21120120140108',
            'nama_lengkap' => 'Ida Bagus Putu Putra Manuaba',
            'pendidikan_terakhir' => 'SMAN Madani Palu',
            'jabatan_posisi' => 'Pelajar',
        ]);

        Karyawan::updateOrCreate([
            'nik' => '21120120140109',
            'nama_lengkap' => 'Ida Ardianingsih',
            'pendidikan_terakhir' => 'SMAN Madani Palu',
            'jabatan_posisi' => 'Pelajar',
        ]);
    }
}
