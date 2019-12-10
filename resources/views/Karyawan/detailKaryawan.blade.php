@extends('layout/main')
<!doctype html>
<html lang="en">
<head>
    @section('title','Input Order')
</head>
<body>
  @section('container')
  <div class="container">
        <div class="row">
            <div class="col mt-3">
                
                <h1>Nama : {{$karyawans->namaKaryawan}}</h1>
                <h1>Email : {{$karyawans->emailKaryawan}}</h1>
                
            </div>
        </div>
    </div>
     @endsection    
</body>
</html>