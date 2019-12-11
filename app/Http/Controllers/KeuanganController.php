<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\Karyawan;
use App\Accounting;
use App\JenisOrder;


class KeuanganController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $keuangan = DB::table('orders')
                ->join('accountings','orders.idOrder','=','accountings.idOrder')
                ->select('orders.*','accountings.*')
                ->paginate(10);
        
        return view('keuangan.index',['keuangans' => $keuangan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function pembayaran($idAccounting)
    {
        $accounting = Accounting::find($idAccounting);
        return view('keuangan.pembayaran',['accounting' => $accounting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepembayaran(Request $request, $idAccounting)
    {
        $accounting = Accounting::find($idAccounting);

        $accounting->biayaMasuk = $request->biayaMasuk;
        $accounting->save();

        return redirect('keuangan');
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
