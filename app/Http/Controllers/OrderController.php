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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $response = Http::get('localhost:8080/api/order');
        $orders = json_decode($response);
        
        return view('order.index',['orders'=> $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $jenisOrders = DB::table('jenis_orders')->get();
        return view('order.create', ['jenisOrders' => $jenisOrders]);
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

        $order->namaOrder = $request->namaOrder;
        $order->deadlineOrder = $request->deadlineOrder;
        $order->karyawanPekerjaOrder = NULL;
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
    public function show($idOrder)
    {
        $orders = Order::find($idOrder);
        $progress_karyawans = DB::table('progress_karyawans')
                                ->where('idOrder',$idOrder)
                                ->join('karyawans','progress_karyawans.idKaryawan','=','karyawans.idKaryawan')
                                ->select('progress_karyawans.*','karyawans.namaKaryawan')
                                ->get();
        $notas = DB::table('notas')->where('idOrder',$idOrder)->get();
        $accountings = DB::table('accountings')->where('idOrder',$idOrder)->first();
        // dd($notas);
        return view('order.detailOrder',[
                    'orders'=>$orders,
                    'progress_karyawans'=>$progress_karyawans,
                    'notas'=>$notas,
                    'accountings'=>$accountings]);
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
