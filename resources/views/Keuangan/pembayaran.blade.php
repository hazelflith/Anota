<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/pembayaran.css">
    <title>Pembayaran</title>
</head>
<body class="bg-dark">
    <div class="container" style="margin:0" >
        <a class="btn btn-secondary text-light mt-4" style="margin:0" href="/keuangan">Kembali</a>
    <div class="wrap">
        <h2 class="text-center text-light">Jumlah Pembayaran</h2>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="biayaMasuk" class="form-control mt-3">
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary">Bayar</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>