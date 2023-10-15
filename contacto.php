<?php
if(isset($_COOKIE['log']))
{ 
  // Caduca en un año 
  
  
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
       
        <li><a href="index.php?cat=novelas"><i class="fa fa-futbol-o"></i>Juegos</a></li>
            <li><a href="contacto.php"><i class="fa fa-phone"></i>Contacto</a></li>
            <li><a href="calculadora.php"><i class="fa fa-calculator"></i>Calculadora</a></li>
            <?php   echo '  <li><a href="login.php"><i class="fa fa-user-circle"></i>'.$_COOKIE['log'].'</a></li> '?>
        <!-- barra pa buscar -->
        <div class="search">
        <div class="search">
<form  method="get" action="busqueda.php">
    

            <input type="text" placeholder="Buscar" name="busqueda">
            </form>
            <i class="fa fa-search"></i>
            
        </div>

    </nav>
    <section id="mainn">

        <!-- lo q se mueve -->
      
        
   
            <div class="contacto-img">
                
                <img src="imagenes/PRECIOS_page-0001.jpg" alt="">
              
                
            </div>
            
            <div class="contacto-imgr">
                
        
                <ul>
                <li><a href="https://t.me/star_copy_cuba"><i class="fa fa-telegram" style="color:dodgerblue"></i> t.me/star_copy_cuba</a></li>
                <li><a href="https://t.me/star_copy_cuba"><i class="fa fa-instagram" style="color: red;"></i> ?????</a></li>
        <li><a href="https://wa.me/52990101"><i class="fa fa-whatsapp" style="color: greenyellow;"></i> 52990101 </a>
        <a href="https://wa.me/58284564 "><i></i> 58284564 </a></li>
        <li><a href="tel:72085006"><i class="fa fa-phone" ></i> 72085006</a></li>
        <li><a href="#"><i class="fa fa-map" style="color: yellow;"></i> Calle 164 #508 entre 1ra y 17A, Siboney, Playa</a></li>
        <li><a href="#"><i class="fa fa-clock-o" ></i> Lunes a viernes : 10am a 8pm - Sábado hasta las 6pm</a></li>
                </ul>
                
            </div>
            
          
          
          

        
    </section>
   

   
</body>
<footer >
        <p>Starcopy, Inc</p>
        <p><?php $Year = date("Y"); echo "Copyright 2014-$Year" ?></p>
    </footer>


</html>