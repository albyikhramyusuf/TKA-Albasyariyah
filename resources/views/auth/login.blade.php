

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/frontend/Login_v5/Login_v5/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v5/Login_v5/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v5/Login_v5/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v5/Login_v5/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v5/Login_v5/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v5/Login_v5/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v5/Login_v5/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v5/Login_v5/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v5/Login_v5/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v5/Login_v5/css/util.css">
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v5/Login_v5/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('/frontend/Login_v5/Login_v5/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w">
                    @csrf
                    <span class="login100-form-title p-b-53">
						Sign In
					</span>



					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="/frontend/Login_v5/Login_v5/#" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="register" class="txt2 bo1">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="/frotend/Login_v5/Login_v5/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/frotend/Login_v5/Login_v5/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/frotend/Login_v5/Login_v5/vendor/bootstrap/js/popper.js"></script>
	<script src="/frotend/Login_v5/Login_v5/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/frotend/Login_v5/Login_v5/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/frotend/Login_v5/Login_v5/vendor/daterangepicker/moment.min.js"></script>
	<script src="/frotend/Login_v5/Login_v5/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/frotend/Login_v5/Login_v5/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/frotend/Login_v5/Login_v5/js/main.js"></script>

</body>
</html>

