<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="login/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/animsition/css/animsition.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/css/main.css')}}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-34">
						 SIMAS HIDAYATUL FALAH
					</span>
					
					
					<div class="container-login100-form-btn">
                        {{-- <a href="{{route('google.login')}}" class="btn btn-block btn-danger">Login</a> --}}
                        <a href="{{route ('google.login')}}" class="btn btn-block btn-danger"> <i class="fa fa-google-plus"></i> LOGIN</a>
						{{-- <button class="login100-form-btn">
							Sign in
						</button> --}}
                        
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						
                        @if (session('alert'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                {{--  {{ session('alert') }}  --}}
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>{{ session('alert') }}</strong> 
                            </div>
                        @endif
						
					</div>

					
				</form>
				<div class="login100-more" style="background-image: url('img/login.jpg');"></div>
			</div>
		</div>    
	</div>
	



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{asset('assets/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="login/vendor/animsition/js/animsition.min.js"></script>
    <script src="{{asset('assets/login/vendor/animsition/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/login/vendor/bootstrap/js/popper.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/login/vendor/select2/select2.min.js')}}"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/login/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/login/js/main.js')}}"></script>

</body>

</html>