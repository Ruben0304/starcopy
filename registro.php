


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="imagenes/logo.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="admin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="admin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="admin/css/main.css">
<!--===============================================================================================-->
</head>
<body style="color:whitesmoke; background-color:black">
	
	<div class="limiter" style="color:whitesmoke; background-color:black">
		<div class="container-login100" style="color:whitesmoke; background-color:black">
			<div class="wrap-login100" >
				<form class="login100-form validate-form" method="POST"  action="login.php">
                <span class="login100-form-title p-b-26">
						Registrarse
					</span>
					

					<div class="wrap-input100 validate-input" data-validate = "Incorrecto" >
						<input class="input100" type="text" name="user" maxlength="12" required>
						<span class="focus-input100" data-placeholder="Usuario"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Incorrecto">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" minlength="8" required>
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Incorrecto">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="passrep" required>
						<span class="focus-input100" data-placeholder="Repita la Contraseña"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Incorrecto">
						
						<input class="input100" type="text" name="dir" required>
						<span class="focus-input100" data-placeholder="Dirección"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Incorrecto">
						<input class="input100" type="tel" name="tel" required>
						<span class="focus-input100" data-placeholder="Telefono"></span>
					</div>
                    
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn"  type="submit">
								Registrarse
							</button>
						</div>
					</div>
                    <div class="regg"  style="margin-top: 20px; ">
                    <a href="login.php" style="color: dodgerblue; font-weight:bold">Entrar</a>
                    </div>
                
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="admin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="admin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="admin/vendor/bootstrap/js/popper.js"></script>
	<script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="admin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="admin/vendor/daterangepicker/moment.min.js"></script>
	<script src="admin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="admin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="admin/js/main.js"></script>

</body>
</html>