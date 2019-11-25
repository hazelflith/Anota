<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Karyawan;
use App\Accounting;
use App\Jenis_Order;

class OrderController extends Controller
{
    /**
     * Create a new controller instance. Page hanya bisa diakses ketika sudah login
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $orders = Order::all();
        return view('order.index',['orders'=> $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $accounting = new Accounting;
        $karyawan = new Karyawan;
        $jenis_order = new Jenis_Order;

        $order->namaOrder = $request->namaOrder;
        $order->deadlineOrder = $request->deadlineOrder;
        $order->karyawanPekerjaOrder = 2; //karena belum tau cara assign banyak karyawan untuk 1 order;
        $order->save();

        $jenis_order->jenisOrder = $request->jenisOrder;
        $jenis_order->save();

        $accounting->priceOrder = $request->priceOrder;
        $accounting->biayaSisa = $request->priceOrder;
        $accounting->idOrder = $order->idOrder;
        $accounting->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
