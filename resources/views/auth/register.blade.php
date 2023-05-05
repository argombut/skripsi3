<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registrasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/regis/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/regis/css/style.css')}}">

</head>

<body>

    <!-- <div class="wrapper" style="background-image: url('img/bg-registration-form-1.jpg');"> -->
    <br><br><br>
    <div class="inner">
        <div class="image-holder">
            <img src="img/login.jpg" alt="">
        </div>
        <form action="">
            <h3>Form Registrasi</h3>
            <div class="form-group">
                <input type="text" placeholder="Nama Depan" class="form-control">
                <input type="text" placeholder="Nama Belakang" class="form-control">
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Username" class="form-control">
                <i class="zmdi zmdi-account"></i>
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Email" class="form-control">
                <i class="zmdi zmdi-email"></i>
            </div>
            <div class="form-wrapper">

            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Confirm Password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <button>Register
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
    </div>
    <!-- </div> -->

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>