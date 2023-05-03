<?php

namespace App\Http\Controllers;

use App\Models\tes_table;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class home extends Controller
{
    function HomeIndex(){
        $dosen_1 = DB::table('nama_dosen')->pluck('Nama')->toArray();
        $dosen_2 = DB::table('nama_dosen')->pluck('Nama')->toArray();
        $dosen_penguji = DB::table('nama_dosen')->pluck('Nama')->toArray();
        $NIM = DB::table('mhs')->pluck('NIM')->toArray();
        $nama = DB::table('mhs')->pluck('nama')->toArray();
        return view('welcome', [  'dosen_penguji' => $dosen_penguji,  'NIM' => $NIM,  'nama' => $nama, 'dosen_1' => $dosen_1,'dosen_2' => $dosen_2,]);

    }
    function DataInsert(Request $request){
        $nama = $request->input('nama');
        $NIM = $request->input('NIM');
        $dosen_1 = $request->input('dosen_1');
        $dosen_2 = $request->input('dosen_2');
        $dosen_penguji = $request->input('dosen_penguji');

        $isInsertSuccess = tes_table::insert([
            'nama' => $nama,
            'NIM' => $NIM,
            'dosen_1' => $dosen_1,
            'dosen_2' => $dosen_2,
            'dosen_penguji' => $dosen_penguji,
        ]);
        $dosen_1 = DB::table('nama_dosen')->pluck('Nama')->toArray();
        $dosen_2 = DB::table('nama_dosen')->pluck('Nama')->toArray();
        $dosen_penguji = DB::table('nama_dosen')->pluck('Nama')->toArray();
        $NIM = DB::table('mhs')->pluck('NIM')->toArray();
        $nama = DB::table('mhs')->pluck('nama')->toArray();
        return view('welcome', [  'dosen_penguji' => $dosen_penguji,  'NIM' => $NIM,  'nama' => $nama, 'dosen_1' => $dosen_1,'dosen_2' => $dosen_2,]);
    }

}
