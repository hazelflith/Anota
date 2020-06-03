<?php

namespace App\Http\Controllers\Karyawan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Karyawan;
use App\ProgressKaryawan;
use App\Order;

class ProgressKaryawanController extends Controller
{

    public function edit($idKaryawan){
        $requestKaryawan = Http::get('https://apianota.herokuapp.com/api/karyawan/'.$idKaryawan);
        $karyawan = json_decode($requestKaryawan);

        $requestOrders = Http::get('https://apianota.herokuapp.com/api/order');
        $orders = json_decode($requestOrders);

        return view('karyawan.assign', [
            'karyawan' => $karyawan,
            'orders' => $orders
        ]);
    }

    //assign pekerjaan seorang karyawan
    public function assign(Request $request, $idKaryawan){
        
        $data = [
            'idKaryawan' => $idKaryawan,
            'idOrder' => $request->idOrder,
            'deadlineKaryawan' => $request->deadlineKaryawan,
            'uangPegangan' => $request->uangPegangan,
            'namaPekerjaOrder' => $request->namaKaryawan,
        ];

        $response = Http::asForm()->post('https://apianota.herokuapp.com/api/karyawan/assign/'.$idKaryawan, $data);

        return redirect('karyawan');



    }
}
