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
        $response = Http::get('localhost:8080/api/jenisOrder');
        $jenisOrders = json_decode($response, true);
        
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

        $request = Http::asForm()->post('localhost:8080/api/order', $data);

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
