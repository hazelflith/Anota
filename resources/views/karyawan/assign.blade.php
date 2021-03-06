@extends('layout/main')
<!doctype html>
<html lang="en">
<head>
    @section('title','Pemberian Tugas')
</head>
<body>
  @section('container')
  <div class="container">
        <div class="row">
            <div class="col mt-3">
                <h1>Tambah Data Baru</h1>
            </div>
        </div>
    
        <form method="post" action="">
        @csrf
            <div class="form-group col-4">
                <label for="namaKaryawan">Nama Karyawan</label>
                <input type="text" value="{{$karyawan->namaKaryawan}}" name="namaKaryawan" class="form-control" id="namaKaryawan" readonly>
            </div>
            <div class="form-group col-4">
                <label for="idOrder">PIC dari</label> 
                <select class="form-control" name="idOrder" id="idOrder" required>
                    @foreach ($orders as $order)
                    <option value="{{$order->idOrder}}">{{$order->namaOrder}}</option>
                    @endforeach
                </select>
            </div>            
            <div class="form-group col-4">
                <label for="deadlineKaryawan">Waktu Tenggat Kerjaan</label>
                <input type="date" name="deadlineKaryawan" class="form-control" id="deadlineKaryawan" required>
            </div>            
            <div class="form-group col-4">
                <label for="uangPegangan">Uang Pegangan</label>
                <input type="text" value="0" name="uangPegangan" class="form-control" id="uangPegangan" required autocomplete="off">
            </div>            
            <div class="form-group col-4">
                <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>

    </div>
     @endsection    
</body>
</html>