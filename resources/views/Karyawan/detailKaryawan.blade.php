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
                @foreach ($karyawans as $karyawan)
                <h1>{{$karyawan->namaKaryawan}}</h1>
                @endforeach
            </div>
        </div>
    </div>
     @endsection    
</body>
</html>