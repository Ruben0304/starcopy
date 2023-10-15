<?php

include("coneccion.php");
header("Access-Control-Allow-Origin: *");
$fecha = date('Y').'-'.date('m').'-'.date('d');
if ( isset($_POST['user'], $_POST['pass']) )
            {
				$user = $_POST['user'];
				$contra =$_POST['pass'];
				$conn="SELECT * FROM usuarios WHERE usuario = '$user'";
				$resultado= mysqli_query($consulta,$conn);
				$obtener = mysqli_fetch_array($resultado);
		if (mysqli_num_rows($resultado)==1) {
			
      if (password_verify( $contra,$obtener['contraseña'])) {
        
        $cook =$_POST['user'];
       
     setcookie("log" ,$cook, 60 * 60 * 24 * 30 * 12);
        $logornot = $cook;
        $connec="SELECT * FROM usuarios WHERE usuario = '$logornot'";
				$resultado= mysqli_query($consulta,$connec);
				$obtener = mysqli_fetch_array($resultado);
                $money = $obtener['saldo'];

	  }
	  else {
		echo ' Contraseña incorrecta';
		exit();
	  }
        } else {
			echo ' Usuario incorrecto';
			exit();
		  }
			}
           
           else if ( isset($_COOKIE['log']) )
            {
                $logornot = $_COOKIE['log'] ;
                $connec="SELECT * FROM usuarios WHERE usuario = '$logornot'";

				$resultado= mysqli_query($consulta,$connec);
				$obtener = mysqli_fetch_array($resultado);
                $money = $obtener['saldo'];
                if (isset($_POST['tarjeta'])) {
                  $tarjet = $_POST['tarjeta'];
$contaret = "SELECT * from tarjetas where tarjeta = '$tarjet' limit 1";
$result = mysqli_query($consulta,$contaret);
$row = mysqli_fetch_array($result);
                  if (mysqli_num_rows($result)==1) {
                    if ($row['estado']=='Sin canjear') {
                      $tiposaldo = $row['tipo'];
                      $uparet = "UPDATE tarjetas SET estado = 'usado'";
                      mysqli_query($consulta,$uparet);
                      $insaldo = "UPDATE usuarios SET  saldo = saldo + '$tiposaldo' where usuario = '$logornot' ";
                      mysqli_query($consulta,$insaldo);
                      header("Refresh0");
                    }else {
                    echo '<i class="fa fa-times-circle"></i>Esta tarjeta ya ha sido usada';
                    exit();
                  }
                  
                  }else {
                    echo 'Tarjeta no válida';
                    exit();
                  }
                }
                if (isset($_GET['tera'])) {
                  $paquete = $_GET['tera'];
                  $conneccc="SELECT * FROM usuarios WHERE usuario = '$logornot'";

                  $resul= mysqli_query($consulta,$conneccc);
                  $ob = mysqli_fetch_array($resul);
                   $tlf=   $ob['telefono']   ;
                   $dir=   $ob['direccion']   ;
                   if ($paquete=='500GB') {
                    $co="25";
                   }
                   if ($paquete=='1TB') {
                    $co="50";
                   }
                   if ($paquete=='2TB'){
                    $co="75";
                  }
                  $insertfact="INSERT INTO `pagos` ( `usuario`, `fecha`, `telefono`, `direccion`,  `articulos`, `costo`) VALUES ('$logornot', '$fecha', '$tlf', ' $dir',  ' Paquete de $paquete','$co');";
                  mysqli_query($consulta, $insertfact);
                  header("Location:perfil.php");
                }
                # qvapay...
                if (isset($_GET['transaction_uuid'])) {
                  $uuid=$_GET['transaction_uuid'];
                }
                if (isset($_POST['pay'])) {
                  $costo=$_POST['cost'];
                  $pay=$_POST['pay'];
                  $connecjhj="SELECT * FROM usuarios WHERE usuario = '$logornot'";
                  $resultad= mysqli_query($consulta,$connecjhj);
                  $obtenerh = mysqli_fetch_array($resultad);
                  $final = $obtenerh['saldo'];
                 if ($costo<=$final) {
                  
                  $inmoney = "UPDATE usuarios SET  saldo = saldo - $costo where usuario = '$logornot' ";
                  $upmoney = "UPDATE pagos SET estado = 'Solicitado',  tipo ='pagado' where id = '$pay' ";
                  $pago = "INSERT into cantsaldo  (  `usuario`, `fecha`, `cantidad`) VALUES ('$logornot','$fecha','$costo')";
                  mysqli_query($consulta,$inmoney );
                  mysqli_query($consulta,$upmoney );
                  mysqli_query($consulta,$pago );
                  header("Location:perfil.php");

                  
                 }
                 if ($costo>$final) {
                  
                 
                  $upmoney = "UPDATE pagos SET estado = 'Solicitado', tipo ='efectivo' where id = '$pay' ";
                  mysqli_query($consulta,$upmoney );
                 
                 }

             
                 header("Location:perfil.php");
                }
                if (isset($_POST['cancel'])) {
                  $idi=$_POST['cancel'];
                  
                  $connecdel="DELETE FROM pagos WHERE id = '$idi'";
                  mysqli_query($consulta,$connecdel);
                  header("Location:perfil.php");
                  
                 }
                 if (isset($_POST['carro'])) {
                  $car=$_POST['carro'];
                  $connecccc="SELECT * FROM usuarios WHERE usuario = '$logornot'";

                  $resula= mysqli_query($consulta,$connecccc);
                  $ob = mysqli_fetch_array($resula);
                   $tlf=   $ob['telefono']   ;
           $dir=   $ob['direccion']   ;
                  $connecdela="SELECT * from carrito where usuario = '$logornot'";
                  $rslt=mysqli_query($consulta,$connecdela);
                  $arts="";
                  while ($obtn = mysqli_fetch_array($rslt) ) {
                    if ($arts=="") {
                      $arts = $obtn['articulo'];
                    }
                    else{
                      $arts = $arts.', '.$obtn['articulo'];
                    }
                    
                  }
                  $connecdel="INSERT into pagos (`usuario`, `fecha`, `telefono`, `direccion`,  `articulos`) VALUES ('$logornot', '$fecha', '$tlf', '$dir','$arts')";
                  mysqli_query($consulta,$connecdel);
                  $ccc="DELETE from carrito where usuario = '$logornot'";
                  $rslt=mysqli_query($consulta,$ccc);
                  header("Location:perfil.php");
                  
                 }
                 if (isset($_GET['pago'])){
                  $tipo=$_GET['pago'];
                  echo'
                  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                <body style="background-color: black; ">
               <h1 style=" margin-left:38%;color: whitesmoke;margin-top: 100px;font-family: Open Sans; font-size: 1.3em;margin-right:38%">Cantidad en <strong>*CUP*</strong></h1>
               <form method="GET">
               <input type="hidden" value="'.$tipo.'" name="moneda";></input>
               <input  type="number" name="cant" style="width: 40%; height: 60px; background-color: white; margin-left:30%; color: black; border-radius: 10px;border: none;margin-top: 30px; " placeholder: "  Introduzca cuanto desea comprar en CUP" required >
                <button type="submit"  style="margin-left: 40%; width: 20%; height: 50px;margin-top: 18px; background-color: dodgerblue;color: white; border-radius: 15px;border: none">Pagar</button>
                </form>
                </body>
                  ';
                  exit();
                 }
                 if (isset($_GET['cant'])){
                  $moneda=$_GET['moneda'] ;
                  $cant=$_GET['cant'] ;
                  
                  header("Location:https://wa.me/5352990101?text=Hola, estoy interesado en comprar $cant cup de Saldo Starcopy utilizando $moneda");
                 }
                 if (isset($_GET['articulo'],$_GET['imagen'],$_GET['tipo'])) {
                  $art=$_GET['articulo'];
                 $img=$_GET['imagen'];
                  $tipo=$_GET['tipo'];
                  $connecdel="INSERT into carrito (articulo,imagen,tipo,usuario) VALUES ('$art','$img','$tipo','$logornot')";
                  mysqli_query($consulta,$connecdel);
                  header("Location:perfil.php");
                  
                 }
                 if (isset($_GET['cerrar_sesion'])) {
                  $llog= $_GET['cerrar_sesion'];
                session_destroy("log");
                 header("Location:index.php");
                 }
            }

            else {
              $logornot = 'Mi Cuenta' ;
              header("Location:login.php");
            }
            
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Starcopy Catálogo</title>
    <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <link rel="stylesheet" href="css/style.css">
      <link rel="shortcut icon" href="imagenes/logo.ico">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="manifest" href="manifest.json">



</head>

<body>
    <!-- navegacion -->
    <nav>
        <a href="index.php" class="logo">
            <img src="imagenes/StarCopy.png" alt="">
        </a>
        <input type="checkbox" class="menu-btn" id="menu-btn"/>
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <!-- menu -->
        <ul class="menu">
     
        <li><a href="index.php"><i class="fa fa-home"></i>Inicio</a></li>
            <li><a href="contacto.php"><i class="fa fa-map"></i>Contacto</a></li>
            
            <li><a href="calculadora.php"><i class="fa fa-clos"></i>Calculadora</a></li>
            <?php   echo '  <li><a href="login.php"><i class="fa fa-user-circle"></i>'.$logornot.'</a></li> '?>
        </ul>
           
        <!-- barra pa buscar -->
        <div class="search">
        <div class="search">
<form  method="get" action="busqueda.php">
    

            <input type="text" placeholder="Buscar" name="busqueda">
            </form>
            <i class="fa fa-search"></i>
            
        </div>

    </nav>
    <section id="mainn" style="margin-top:  0px;">

       <div class="hola">
           <h1>Hola <?= $logornot ?> <img src="https://emojigraph.org/media/facebook/waving-hand-light-skin-tone_1f44b-1f3fb.png" alt=""></h1>
       </div>
      
        <div class="wallet">
           
          <div class="wallet-cuadro">
          <h2>$<?=$money?></h2>
          </div>
          
        <div class="pay-options">
       
           
            <ul>
                <li><a href="perfil.php?pago=Bitcoin"><img src="	https://qvapay.com/img/coins/btc.svg" alt=""></a></li>
                <li> <a href="perfil.php?pago=Usdt"><img src="https://qvapay.com/img/coins/usdt.svg" alt=""></a></li>
                <li> <a href="perfil.php?pago=Matic"><img src="	https://qvapay.com/img/coins/matic.svg" alt=""></a></li>
                <li> <a href="perfil.php?pago=Trx"><img src="https://qvapay.com/img/coins/trx.svg" alt=""></a></li>
                <li> <a href="perfil.php?pago=Litecoin"><img src="	https://qvapay.com/img/coins/ltc.svg" alt=""></a></li>
                <li> <a href="perfil.php?pago=XMR"><img src="https://qvapay.com/img/coins/xmr.svg" alt=""></a></li>
                <li> <a href="perfil.php?pago=Dash"><img src="	https://qvapay.com/img/coins/dash.svg" alt=""></a></li>
                <li> <a href="perfil.php?pago=Doge"><img src="	https://qvapay.com/img/coins/doge.svg" alt=""></a></li>
                <li> <a href="perfil.php?pago=BNB"><img src="https://qvapay.com/img/coins/bnb.svg" alt="" ></a></li>
                <li> <a href="perfil.php?pago=VET"><img src="	https://qvapay.com/img/coins/vet.svg" alt="" ></a></li>
                <li> <a href="perfil.php?pago=EOS"><img src="https://cdn4.iconfinder.com/data/icons/crypto-currency-and-coin-2/256/eos_eoscoin_coin-512.png" alt=""></a></li>
                <li> <a href="perfil.php?pago=Qvapay"><img src="https://qvapay.com/android-chrome-512x512.png" alt="" ></a></li>
                <li> <a href="perfil.php?pago=Paypal"><img src="https://qvapay.com/img/coins/paypal.svg" alt=""></a></li>
                <li> <a href="perfil.php?pago=Paypal">CUP</a></li>
                <li> <a href="perfil.php?pago=Paypal">MLC</a></li>
            </ul>
            <form method="POST">
                
            
            <input type="text" name="tarjeta" placeholder="Canjear Codigo">
            <button type="submit" class="btninput">Aceptar</button>
            </form>
        </div>
      </div>
     
      <div class="profile">
        <div class="carrito">
          <h3 style="margin-left: 10%">Tu carrito <i class="fa fa-shopping-cart" ></i></h3>
        <div class="elementos">
       
    <?php
    
    $resultado=mysqli_query($consulta,"SELECT * FROM carrito where usuario = '$logornot'");
     
    
           
    
                while ($obtener = mysqli_fetch_array($resultado)) {
        
                
                echo '
                <div class="movies-boxe" style="width: 100px;height: 150px; display: inline-block;margin-left: 14px;margin-top:14px">
        <div class="movies-imge"  style="width: 100%; height: 150px;">
            
            <img src="'.$obtener['imagen'].'" alt="" style="width: 100%;height: 100%;border-radius: 8px; object-fit: cover">
        </div>
      
       
        </div>
   
        ';
            
     }
            
  
     
     ?>
 
  
      
          <form method="POST"> 
              <textarea rows="" cols="" ></textarea>
           
            <input type="hidden" name="articulos" value="">
            </form>
          </div>
          
            
          </div>
          <div class="itmbtn">
                    <ul>
                    <form method="POST" action="perfil.php">
                      <input type="hidden" name="carro" value="">
                   
                   <li><button class="procesar" type="submit"><i class="fa fa-check"></i> Procesar pedido</button></li>
                  
                   </form>
           
                    </ul>
               
               
                    </div>
            </div>
            
           
        </div>
            <div class="paquete">
              <form method="GET">
                <h1>Paquete Semanal</h1>
                <div class="solicitar">
                  <ul>
                    
                 
                 
                 <li><input type="radio" name="tera" value="500GB"></li>
                 <li><h5> 500GB</h5></li>
                 <li><input type="radio" name="tera" value="1TB"></li>
                 <li><h5> 1TB</h5></li>
                 <li><input type="radio" name="tera" value="2TB"></li>
                 <li><h5> 2TB</h5></li>
                 <li> <button class="procesar" type="submit" style="background-color: rgba(205, 240, 6, 0.7);"><i class="fa fa-check" ></i> Solicitar</button></li>
                  </ul>
                </div>
              </form>
            </div>

            <div class="facturas">
            <?php
	$consfact ="SELECT * from pagos where usuario = '$logornot' ORDER By id DESC LIMIT 7";
 $Seleccionar = mysqli_query($consulta,$consfact) ;
 while ($obtener = mysqli_fetch_array($Seleccionar)) {
 $idfact =$obtener['id'];
 $costfact =$obtener['quitado'];
if ($costfact != "") {
  echo'
  <p style="margin: 10px">  Factura '.$idfact.' '.$costfact.'</p>
  ';
}
}
?>
        <h1>Facturas</h1>
               <table class="historial">
        
	                  	  	  
                              <thead>
                              <tr>
                                  <th>Id</th>
                                  <th class="art">Articulos</th>
								  <th class="fech">Fecha</th>
								  <th>Coste</th>
                                  <th>Estado</th>
                                  
                                  
                                   
                                 
                                  
                              </tr>
                              </thead>
                              <tbody>
							  <?php
								 
								  
							$consfact ="SELECT * from pagos where usuario = '$logornot' ORDER By id DESC LIMIT 7";
                                  
								  $Seleccionar = mysqli_query($consulta,$consfact) ;
								  while ($obtener = mysqli_fetch_array($Seleccionar)) {
									$idfact =$obtener['id'];
                  $costfact =$obtener['costo'];
								   echo'
                             
							
							 <tr>
                                  <td>   '   .$obtener['id'].'</td>
                                  <td class="art">   '   .$obtener['articulos'].'</td>
								  <td class="fech">   '   .$obtener['fecha'].'</td>';
                                
								  
                                  if ($obtener['estado']=="Revisado") {
                                    
                                    echo'
                                    <td>   $'   .$obtener['costo'].'</td>
                                    <td>   ' .$obtener['estado'].' <i class="fa fa-circle" style="color: blue; font-size: 10px"></i></td>
                                    <form method="POST">
                                    
                                    <input type="Hidden" name="cancel" value="'.$idfact.'">
                                    <td>   <button type="submit" class="pagar" style="background-color: red;" ><i class="fa fa-close"></i> Cancelar</button></td>
                                    </form>
                                    <form method="POST">
                                    <input type="Hidden" name="pay" value="'.$idfact.'">
                                    <input type="Hidden" name="cost" value="'.$costfact.'">
                                    <td><button type="submit" class="pagar"  ><i class="fa fa-credit-card"></i> Pagar</button></td>
                                    </form>
                                    ';
                                  }
                                  if ($obtener['estado']=="Solicitado") {
                                    
                                    echo'
                                    <td>   $'   .$obtener['costo'].'</td>
                                    <td>   ' .$obtener['estado'].' <i class="fa fa-circle" style="color: yellowgreen; font-size: 10px"></i></td>
                                    ';
                                  }
                                  if ($obtener['estado']=="En camino") {
                                    
                                    echo'
                                    <td>   $'   .$obtener['costo'].'</td>
                                    <td>   ' .$obtener['estado'].' <i class="fa fa-circle" style="color: indigo; font-size: 10px"></i></td>
                                    ';
                                  }
                                  if ($obtener['estado']=="Entregado") {
                                    
                                    echo'
                                    <td>   $'   .$obtener['costo'].'</td>
                                    <td>   ' .$obtener['estado'].' <i class="fa fa-circle" style="color: green; font-size: 10px"></i></td>
                                    ';
                                  }
                                  if ($obtener['estado']=="Revisando") {
                                  echo'
                                  <td>   $'   .$obtener['costo'].'</td>
                                  <td>   ' .$obtener['estado'].' <i class="fa fa-circle" style="color: orange; font-size: 10px"></i></td>
                                  <form method="POST">
                                    
                                  <input type="Hidden" name="cancel" value="'.$idfact.'">
                                  <td>   <button type="submit" class="pagar" style="background-color: red;" ><i class="fa fa-close"></i> Cancelar</button></td>
                                  </form>';
                                }
                                echo'
                              </tr>
							';
							} ?>
                             
							 </tbody>
                          </table>
                          
           </div>
           <?php
           echo'
           <a href="perfil.php?cerrar_sesion='.$logornot.'"><button class="pagar"  style="background-color: red; margin-top: 60px;margin-left: 40%" ><i class="fa fa-out"></i> Cerrar Sesion</button></a>
          ';
           ?>
          <?php
          echo'
          <form>
            <input type="Hidden" name="uuid" value="'.$uuid.'">
            <input type="Hidden" name="remote" value="'.$remote.'">
          </form>';
          ?>

        
    </section>
    <footer >
        <p>Starcopy</p>
        <p><?php $Year = date("Y"); echo "Copyright 2012-$Year" ?></p>
    </footer>

   
</body>


</html>