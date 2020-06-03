<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Order;
use App\Karyawan;
use App\Accounting;
use App\JenisOrder;

class OrderController extends Controller
{
    /**
     * Create a new controller instance. Page hanya bisa diakses ketika sudah login
     *
     * @return void
     */
    
    public function index()
    {
        $response = Http::get('https://apianota.herokuapp.com/api/order');
        $orders = json_decode($response, true);
        
        return view('order.index',['orders'=> $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $response = Http::get('https://apianota.herokuapp.com/api/jenisOrder');
        $jenisOrders = json_decode($response, true);
        
        return view('Order.create', ['jenisOrders' => $jenisOrders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'namaOrder' => $request->namaOrder,
            'deadlineOrder' => $request->deadlineOrder,
            'karyawanPekerjaOrder' => NULL,
            'progressOrder' => 0,
            'jenisOrder' => $request->jenisOrder,
            'priceOrder' => $request->priceOrder,
            'biayaSisa'=> $request->priceOrder,
            'biayaMasuk' => 0,
        ];

        $request = Http::asForm()->post('https://apianota.herokuapp.com/api/order', $data);

        if($request->successful())
        return redirect('order')->with('message', 'Data Berhasil Dimasukkan!');
        else
        return redirect('order')->with('message', 'Error saat memasukkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idOrder)
    {
       $request = Http::get('https://apianota.herokuapp.com/api/order/'.$idOrder);
       $data = json_decode($request, true);

       
        return view('order.detailOrder',[
                    'orders'=>$data['orders'],
                    'progress_karyawans'=>$data['progress_karyawans'],
                    'notas'=>$data['notas'],
                    'accountings'=>$data['accountings'],
                    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
