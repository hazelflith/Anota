@extends('layout/main')

@section('title', 'Beranda - Anota')
@section('status1', 'color:#FF8787')

@section('container')
<link href="/css/beranda.css" rel="stylesheet">
    <div class="col-md-12 div-flex center">
        <div class="align-left div-left">
            <div class="h1 font-weight-normal title">Anota</div>
            <div class="h5 mb-3 font-weight-normal subtitle">Asisten Notaris Anda</div>
        </div>
        <div class="div-right">
            <div><img class="container-a" src="/assets/bg/home/container.png"></div>
            <div><img class="container-b" src="/assets/bg/home/container.png"></div>
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