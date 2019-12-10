<?php

namespace App\Http\Controllers\Karyawan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Karyawan;
use App\ProgressKaryawan;
use App\Order;

class ProgressKaryawanController extends Controller
{

    public function edit($idKaryawan){
        $karyawan = Karyawan::find($idKaryawan);
        $orders = Order::all();
        return view('karyawan.assign', compact('karyawan','orders'));
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

        $order = Order::find($progressKaryawan->idOrder);

        $order->karyawanPekerjaOrder = $idKaryawan;
        $order->namaPekerjaOrder = $request->namaKaryawan;
        $order->save();

        return redirect('/karyawan');



    }
}
