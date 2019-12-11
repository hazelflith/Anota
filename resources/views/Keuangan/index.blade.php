@extends('layout/main')

@section('title', 'Keuangan - Anota')
@section('status4', 'color:#FF8787')

@section('container')
<!-- Custom styles for this template -->
<link href="/css/table.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-10 table1 rounded animated zoomIn faster mb-5">
                <h1 class="mt-2">Status Keuangan</h1>
                <table class="table">
                    <thead class="thead-dark customtitle">
                    <tr class="text-center">
                        <th scope="col">Project</th>
                        <th scope="col">Jenis Kerjaan</th>
                        <th scope="col">Waktu Tenggat Kerjaan</th>
                        <th scope="col">Biaya Masuk</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Progress Pembayaran</th>
                        <th scope="col">Pembayaran</th>
                    </tr>
                    <tbody>
                    @foreach ($keuangans as $keuangan)
                        <tr class="rowtable text-center">
                            <th scope='row'>{{$keuangan -> namaOrder}}</th>
                            <td>{{$keuangan -> jenisOrder}}</td>
                            <td>{{$keuangan -> deadlineOrder}}</td>
                            <td>Rp. {{number_format($keuangan -> biayaMasuk)}}</td>    
                            <td>
                                <form style="margin:0" action="/keuangan/upload" method="POST" enctype="multipart/form-data">
                                        <label style="margin:0" class="btn btn-primary" for="file">+</label>
                                        <input type="file" id="file">
                                </form>
                            </td>   <!-- Belum ada database untuk nota -->
                            <td>Rp. {{number_format($keuangan -> biayaMasuk)}} / Rp. {{number_format($keuangan -> priceOrder)}}</td> 
                            <td><a class="btn btn-success" style="color:white" href="/keuangan/bayar/{{$keuangan->idAccounting}}">+</a></td>
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