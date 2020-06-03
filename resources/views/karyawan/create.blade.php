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
                <h1>Tambah Data Baru</h1>
            </div>
        </div>
    
        <form method="post" action="create">
        @csrf
            <div class="form-group col-4">
                <label for="namaKaryawan">Nama Karyawan</label>
                <input type="text" name="namaKaryawan" class="form-control" id="namaKaryawan" autocomplete="off" required>
            </div>
            <div class="form-group col-4">
                <label for="emailKaryawan">Email</label>
                <input type="text" name="emailKaryawan" class="form-control" id="emailKaryawan" autocomplete="off" required>
            </div>            
            <div class="form-group col-4">
                <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>

    </div>
     @endsection    
</body>
</html>