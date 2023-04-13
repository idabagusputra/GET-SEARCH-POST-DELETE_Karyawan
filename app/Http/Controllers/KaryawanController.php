<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    public function getAllKaryawan()
    {
        $karyawans  = DB::table('karyawans')->get();
        return view('detail_karyawan', compact('karyawans'));
    }

    public function searchKaryawan(Request $request)
    {
        // Mengambil data yang diinputkan oleh user pada form search
        $search = $request->input('search');

        // Melakukan pencarian data karyawan berdasarkan nama lengkap
        $karyawans = DB::table('karyawans')
                    ->where('nama_lengkap', 'LIKE', '%' . $search . '%')
                    ->get();

        // Mengembalikan view index.blade.php dan passing data karyawan hasil pencarian
        return view('detail_karyawan', compact('karyawans'));
    }

    public function addKaryawan(Request $request)
    {
        $nik = $request->input('nik');
        $nama_lengkap = $request->input('nama_lengkap');
        $pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $jabatan_posisi = $request->input('jabatan_posisi');
        
        DB::table('karyawans')->insert([
            'nik' => $nik,
            'nama_lengkap' => $nama_lengkap,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'jabatan_posisi' => $jabatan_posisi
        ]);
        
        $karyawans = DB::table('karyawans')->get();
        return view('detail_karyawan', compact('karyawans'));
    }


    public function deleteKaryawan($id)
    {
        $karyawan = DB::table('karyawans')->where('id', $id)->first();

        if ($karyawan) {
            DB::table('karyawans')->where('id', $id)->delete();

            return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus');
        } else {
            return redirect()->route('karyawan.index')->with('error', 'Karyawan tidak ditemukan');
        }
    }
}
