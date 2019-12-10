@extends('layout/main')

@section('title', 'Order - Anota')
@section('status2', 'color:#FF8787')

@section('container')
<!-- Custom styles for this template -->
<link href="/css/table.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-10 table1 rounded animated zoomIn faster">
                <div class="row justify-content-between">
                    <div class="col-4"><h1 class="mt-2 heading1">Orderan Anda</h1></div>
                    <div class="col-4"><a href="order/create" class="mt-2 btn btn-primary float-right">Input</a></div>
                </div>

                <table class="table">
                    <thead class="thead-dark customtitle">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Project</th>
                        <th scope="col">Jenis Kerjaan</th>
                        <th scope="col">Waktu Tenggat Kerjaan</th>
                        <th scope="col">Biaya</th>
                        <th scope="col">Karyawan</th>
                        <th scope="col">Progress Kerjaan</th>
                    </tr>
                    <tbody>
                      @foreach ($orders as $order)

                        @if ($order->idOrder == 5869) <!--Menghindari id abstract untuk di tampilkan-->
                            @continue
                        @endif

                        <tr class="rowtable">
                            <th scope='row'>{{$loop -> iteration}}</th>
                            <td >{{$order ->namaOrder}}</td>
                            <td>{{$order ->jenisOrder}}</td>
                            <td>{{$order ->deadlineOrder}}</td>
                            <td>Rp. {{number_format($order ->priceOrder)}}</td>
                            <td>
                            @if ($order->namaPekerjaOrder != NULL)
                            {{$order->namaPekerjaOrder}}
                            @else
                            Belum ditugaskan
                            @endif
                            </td>
                            <td>{{$order ->progressOrder}}%</td>
                        </tr>
                    @endforeach 
                    </tbody>
                    </thead>
                </table>
                <div class="float-right">
                    {{$orders->links()}}
                </div>
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