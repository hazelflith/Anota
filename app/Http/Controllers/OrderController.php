<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //ambil data dari database
        $order = Order::all();
        $accounting = Accounting::all();    //segera diubah, karena kayaknya gaaman kalau semua data langsung dipanggil
        $jenis_order = JenisOrder::all();    //segera diubah, karena kayaknya gaaman kalau semua data langsung dipanggil
        $karyawan = Karyawan::all();        //segera diubah, karena kayaknya gaaman kalau semua data langsung dipanggil
        
        //menggabungkan semua query
        $join = DB::table('orders')
                ->join('accountings','orders.idOrder','=','accountings.idOrder')
                ->select('orders.*','accountings.priceOrder')
                ->get();

        return view('order.index',['orders'=> $join]);
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
        $jenis_order = new JenisOrder;

        $jenis_order->jenisOrder = $request->jenisOrder; //akan berubah. seharusnya primary key ini di assign di page lain
        $jenis_order->save();       //memasukkan ke database

        $order->namaOrder = $request->namaOrder;
        $order->deadlineOrder = $request->deadlineOrder;
        $order->karyawanPekerjaOrder = 2; //karena belum tau cara assign banyak karyawan untuk 1 order;
        $order->progressOrder = 0;
        $order->jenisOrder = $request->jenisOrder;
        $order->save();

        $accounting->priceOrder = $request->priceOrder;
        $accounting->biayaSisa = $request->priceOrder;
        $accounting->biayaMasuk = 0;
        $accounting->idOrder = $order->idOrder;
        $accounting->save();

        return redirect('order');
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
