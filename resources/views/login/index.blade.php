<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login - Anota</title>
</head>
<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">

<body class="text-center" background="/assets/bg/login/background.png">
<div class="col-md-12" style="background:url(/assets/bg/login/Exclusion.png); height: 700px; background-size: 700px; background-repeat: no-repeat; background-position: center;">
  <form class="form-signin">
          <div class="h1 font-weight-normal title">Anota
            <div class="h5 mb-3 font-weight-normal subtitle">Asisten Notaris Anda</div>
          </div>
          <div class="align-left"><img class="logintext" src="/assets/bg/login/login.png"></div>
          <div class="align-left mb-4 font-weight-normal"style="font-size: 15px;">Masukkan Identitas Anda Untuk Melanjutkan</div>
          <label for="inputEmail" class="sr-only">Username</label>
          <div class="align-left"><img src="/assets/bg/login/username.png "style="height=45px;width:45px">
            <input type="email" id="inputEmail" class="form-control custom-form" placeholder="Username" required autofocus></div>
          <label for="inputPassword" class="sr-only">Password</label>
          <div class="align-left"><img src="/assets/bg/login/password.png "style="height=45px;width:45px">
            <input type="password" id="inputPassword" class="form-control custom-form" placeholder="Password" required></div>
          <div class="checkbox mb-3">
              <label style="margin-right: 170px;">
              <input type="checkbox" value="remember-me"> Remember me
              </label>
              <div class="h8"style="margin-right: 70px;">Lupa Password ?   <a href="url">Hubungi Kami</a></div> 
          </div>
          <button class="btn btn-2" onclick="window.location.href='\home'" type="submit">Sign in </button>
          <p class="mt-5 mb-3 text-muted">&copy; Anota 2019</p>
      </form>
</div>
    
</body>
</html>