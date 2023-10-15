<?php
include("coneccion.php");
           
            if ( isset($_COOKIE['log']) )
            {
                $logornot = $_COOKIE['log'] ;
            }
            else {
              $logornot = 'Mi Cuenta' ;
            }
            ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Starcopy Catálogo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightslider.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/lightslider.js"></script>
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
            <li><a href="calculadora.php"><i class="fa fa-calculator"></i>Calculadora</a></li>
            <?php   echo '  <li><a href="login.php"><i class="fa fa-user-circle"></i>'.$logornot.'</a></li> '?>
        </ul>
        <!-- barra pa buscar -->
        <div class="search">
<form  method="get" action="busqueda.php">
    

            <input type="text" placeholder="Buscar" name="busqueda">
            </form>
            <i class="fa fa-search"></i>
            
        </div>

    </nav>
    <section id="main">

        <!-- lo q se mueve -->
      
        <h1 class="showcase-heading"><strong style="color: red; font-family: Segoe UI;">I</strong> Estrenos</h1>

        <ul id="autoWidth" class="cs-hidden">
          

<?php

if ($comprobar=true) {
$resultado=mysqli_query($consulta,"SELECT * FROM $estrenos ");
 while ($obtener = mysqli_fetch_array($resultado)) {
    echo '<li class="item-a">
      <div class="showcase-box">
      <a href="info.php?titulo='.$obtener['api'].'&tipo='.$obtener['tipo'].'&name='.$obtener['nombre'].'">  <img src='.$obtener['url'].'> </a>
       </div>
     </li>';
 } 
// foreach ($query as $resultado) {
//     echo '<li class="item-a">
//     <div class="showcase-box">
//         <img src='.$query["url"].'>
//     </div>
// </li>';
// }
}
else {
    echo "problema de conexion";
}
?>
        
        
        </ul>


    </section>
    <!-- dentro de poco -->
    <section id="latest">
      
        <h2 class="latest-heading"><strong style="color: red; font-family: Segoe UI;">I</strong> Dentro de poco</h2>
        <ul id="autoWidth2" class="cs-hidden">
        <?php

for ($i=0; $i <= 2; $i++) { 

$resultado=mysqli_query($consulta,"SELECT * FROM $pronto ");
 

        

            while ($obtener = mysqli_fetch_array($resultado)) {
    
            
            echo '
            <li class="item-a">
                <div class="latest-box">
                    <div class="latest-b-img">
                    <a href="info.php?titulo='.$obtener['api'].'&tipo='.$obtener['tipo'].'&name='.$obtener['nombre'].'" >  <img src="'.$obtener['url'].'" alt=""></a>
                    </div>
                    <div class="latest-b-text">
                    <a href="info.php?titulo='.$obtener['api'].'&tipo='.$obtener['tipo'].'&name='.$obtener['nombre'].'"  id="ltstbox"> <strong>'.$obtener['nombre'].'</strong></a>
                      
                    </div>
                </div>
            </li>
           
             ';
        }}
       ?>
        </ul>
       
    </section>
    <div class="movies-heading">
        <h2><strong style="color: red; font-family: Segoe UI;">I</strong> Lo más pedido</h2>
    </div>
    <section id="movie-list">
    <?php
    
   
    $resultado=mysqli_query($consulta,"SELECT * FROM $maspedido ");
     
    
           
    
                while ($obtener = mysqli_fetch_array($resultado)) {
        
                
                echo '
                <div class="movies-box">
        <div class="movies-img">
            
            <a href="info.php?titulo='.$obtener['api'].'&tipo='.$obtener['tipo'].'&name='.$obtener['nombre'].'">      <img src="'.$obtener['url'].'" alt=""></a>
        </div>
      
        <a href="info.php?titulo='.$obtener['api'].'&tipo='.$obtener['tipo'].'&name='.$obtener['nombre'].'" id="pmovbox" >'.$obtener['nombre'].'</a>
  </a>
    </div>
        ';
            
     }
            
  
     
     ?>

    </section>
    <footer>
        <p>Starcopy, Inc</p>
        <p><?php $Year = date("Y"); echo "Copyright 2014-$Year" ?></p>
    </footer>
</body>
<script>
    $(document).ready(function() {
        $('#autoWidth,#autoWidth2').lightSlider({
            autoWidth: true,
            loop: true,


            onSliderLoad: function() {
                $('#autoWidth,#autoWidth2').removeClass('cS-hidden');

            }
        });
    });
</script>

</html>
