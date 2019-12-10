@extends('layout/main')

@section('title', 'Karyawan - Anota')
@section('status3', 'color:#FF8787')

@section('container')
<!-- Custom styles for this template -->
<link href="/css/table.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-10 table1 rounded">
                <div class="row justify-content-between">
                <div class="col-4"><h1 class="mt-2 heading1">Karyawan Anda</h1></div>
                <div class="col-4"><a href="karyawan/create" class="mt-2 btn btn-primary float-right">Input</a></div>
                </div>
                <table class="table">
                    <thead class="thead-dark customtitle">
                    <tr>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Waktu Tenggat Kerjaan</th>
                        <th scope="col">Status Kerjaan</th>
                        <th scope="col">Uang Pegangan</th>
                        <th scope="col">Progress Kerjaan</th>
                        <th scope="col">Action</th>
                    </tr>
                    <tbody>
                    @foreach($karyawans as $karyawan)
                    <tr>
                        <th scope='row'>{{$karyawan->namaKaryawan}}</th>
                        <td>Belum Ditugaskan</td>
                        <td>Belum Ditugaskan</td>
                        <td>Belum Ditugaskan</td>
                        <td>BARPROGRESS1</td>
                        <td><a class="btn btn-success" href="karyawan/assign/{{$karyawan->idKaryawan}}">Assign</a> <a class="btn btn-danger" href="karyawan/delete/{{$karyawan->idKaryawan}}">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                    </thead>
                </table>
               </div>
            </div>
        </div>
@endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>