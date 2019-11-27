@extends('layout/main')

@section('title', 'Karyawan - Anota')
@section('status3', 'color:#FF8787')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-2">Karyawan Anda</h1>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama Project</th>
                        <th scope="col">Jenis Kerjaan</th>
                        <th scope="col">Waktu Tenggat Kerjaan</th>
                        <th scope="col">Biaya</th>
                        <th scope="col">Karyawan</th>
                        <th scope="col">Progress Kerjaan</th>
                    </tr>
                    <tbody>
                    <tr>
                    <th scope='row'>PROJECT 1</th>
                    <td>JENIS 1</td>
                    <td>WAKTU 1</td>
                    <td>Rp.000,00</td>
                    <td>IMAGE123</td>
                    <td>BARPROGRESS1</td>
                    </tr>
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