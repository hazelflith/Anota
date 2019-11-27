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
                <label for="namaOrder">Nama Project</label>
                <input type="text" name="namaOrder" class="form-control" id="namaOrder">
            </div>
            <div class="form-group col-4">
                <label for="jenisOrder">Jenis Kerjaan</label>
                <input type="text" name="jenisOrder" class="form-control" id="jenisOrder">
            </div>
            <div class="form-group col-4">
                <label for="deadlineOrder">Waktu Tenggat</label>
                <input type="date" name="deadlineOrder" class="form-control" id="deadlineOrder">
            </div>
            <div class="form-group col-4">
                <label for="priceOrder">Biaya</label>
                <input type="text" name ="priceOrder" class="form-control" id="priceOrder">
            </div>
            <div class="form-group col-4">
                <label for="karyawanPekerjaOrder">Karyawan</label>
                <input type="text" name="karyawanPekerjaOrder" class="form-control" id="karyawanPekerjaOrder">
            </div>
            <div class="form-group col-4">
                <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>

    </div>
     @endsection    
</body>
</html>