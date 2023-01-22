<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page Sicalang</title>
  <link rel="stylesheet" href="{{ asset('template/assets/css/login.css') }}">
</head>

<body>
  <div class="parent clearfix">
    <div class="bg-illustration">
      <img src="https://i.ibb.co/Pcg0Pk1/logo.png" alt="logo">


    </div>

    <div class="login">
      <div class="container">
        <h1>Login Virtual Tour</h1>

        <div class="login-form">
          <form action="{{route('proses-login')}}" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Tuliskan Nama Lengkap">
            <input type="text" name="kelas" placeholder="Tuliskan Kelasmu">

            <button type="submit">LOG-IN</button>
            <p>kembali ke menu utama? <a href="/">klik disini</a></p>

          </form>
        </div>

      </div>
    </div>
  </div>
</body>

</html>