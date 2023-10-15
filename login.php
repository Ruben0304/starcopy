<?php 
include("coneccion.php");

if ( isset($_POST['user'], $_POST['pass'])) {
    

      
      $user = $_POST['user'];
	    $password = $_POST['pass'];
        $passrep= $_POST['passrep'];
      $telefono = $_POST['tel'];
	    $dir = $_POST['dir'];
	    $options = array("cost"=>4);
       
            
        
        if ($password==$passrep) {
            $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
			$sss="SELECT * from usuarios where usuario='$user' limit 1";
			$que=mysqli_query($consulta,$sss);
			
			if (mysqli_num_rows($que)==1) {
            echo'El usuario ya esta en uso eliga otro';
			exit();
			}
			else{
            $stmt = "INSERT INTO usuarios (usuario, contraseña, direccion, telefono) VALUES ('$user','$hashPassword','$dir','$telefono')";
          
              mysqli_query($consulta, $stmt);
              header("index.php");
        }
      }
	  

      else {
        echo'Las Contraseñas no coinciden';
    }
		  

}
if(isset($_COOKIE['log']))
{ 
    header('Location: perfil.php');
  
  
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inicia Sesión</title>
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
				<form class="login100-form validate-form" method="POST" action="perfil.php" >
					<span class="login100-form-title p-b-26">
						Iniciar Sesión
					</span>
					

					<div class="wrap-input100 validate-input" data-validate = "Incorrecto" >
						<input class="input100" type="text" name="user" required>
						<span class="focus-input100" data-placeholder="Usuario"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Incorrecto">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" required>
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>
                    
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn"  type="submit">
								Entrar
							</button>
						</div>
					</div>
                    <div class="regg"  style="margin-top: 20px; ">
                    <a href="registro.php" style="color: dodgerblue; font-weight:bold">Registrarse</a>
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