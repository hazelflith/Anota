<?php

namespace App\Http\Controllers\Karyawan;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Karyawan;
use App\ProgressKaryawan;

class ProgressKaryawanController extends Controller
{

    public function edit($idKaryawan){
        $karyawan = Karyawan::find($idKaryawan);
        return view('karyawan.assign',['karyawan' => $karyawan]);
    }

    //assign pekerjaan seorang karyawan
    public function assign(Request $request, $idKaryawan){
        $progressKaryawan = ProgressKaryawan::find($idKaryawan);
        
        $progressKaryawan->idKaryawan = $idKaryawan;
        $progressKaryawan->idOrder = $request->idOrder;
        $progressKaryawan->deadlineKaryawan = $request->deadlineKaryawan;
        $progressKaryawan->uangPegangan = $request->uangPegangan;
        $progressKaryawan->progressKerjaan = 0;
        $progressKaryawan->statusKerjaan = NULL;

        $progressKaryawan->save();

        return redirect('/karyawan');



    }
}
