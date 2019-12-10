<?php

namespace App\Http\Controllers\Karyawan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Karyawan;
use App\ProgressKaryawan;

use Illuminate\Http\Request;

class KaryawanController extends Controller
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
        $karyawans = DB::table('karyawans')
                    ->join('progress_karyawans','karyawans.idKaryawan','=','progress_karyawans.idKaryawan')
                    ->select('karyawans.namaKaryawan','progress_karyawans.*')
                    ->get();
        return view('karyawan.index',['karyawans' => $karyawans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $karyawan = new Karyawan;

        $karyawan->namaKaryawan = $request->namaKaryawan;
        $karyawan->emailKaryawan = $request->emailKaryawan;
        $karyawan->save();

        $progressKaryawan = new ProgressKaryawan;

        $progressKaryawan->idKaryawan = $karyawan->idKaryawan;
        $progressKaryawan->idOrder = NULL;
        $progressKaryawan->deadlineKaryawan = NULL;
        $progressKaryawan->uangPegangan = NULL;
        $progressKaryawan->progressKerjaan = 0;
        $progressKaryawan->statusKerjaan = NULL;

        $progressKaryawan->save();

        return redirect('karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idKaryawan)
    {
        $karyawans = Karyawan::find($idKaryawan);

        return view('karyawan.detailKaryawan',['karyawans'=>$karyawans]);
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
    public function destroy($idKaryawan)
    {
        $karyawan = Karyawan::find($idKaryawan);
        $karyawan->delete();

        return redirect('karyawan');
    }
}
