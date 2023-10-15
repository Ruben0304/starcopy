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
        <li><a href="index.php"><i class="fa fa-film"></i>Pelis</a></li>
        <li><a href="index.php?cat=series"><i class="fa fa-tv"></i>Series</a></li>
        <li><a href="index.php?cat=novelas"><i class="fa fa-heart"></i>Novelas</a></li>
        <li><a href="index.php?cat=novelas"><i class="fa fa-futbol-o"></i>Juegos</a></li>
            <li><a href="contacto.php"><i class="fa fa-phone"></i>Contacto</a></li>
            <li><a href="calculadora.php"><i class="fa fa-calculator"></i>Calculadora</a></li>
            <li><a href="saldo.php"><i class="fa fa-shopping-bag"></i>Mi Saldo</a></li>
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
       <div class="center-saldo" >
           <?php
           include("coneccion.php");
           if (isset($_POST['cliente'])) {
           $client = 'cliente';
               $cl = $_POST['cliente'];
               $quer = "SELECT * from $saldo where $client = '".$cl."'";
               $resulte = mysqli_query($consulta,$quer);
              
              if ($conn=mysqli_fetch_array($resulte)) {
                echo ' <h1>$'.$conn['saldo'].'</h1>';
                }
                else {
                    echo ' <h1>$0.00</h1>';
                }
         
           }
          else {
            echo ' <h1>$0.00</h1>';
          }
           ?>
<form method="POST" action="saldo.php">
<input type="text" name="cliente" placeholder="  Su id de cliente">
<button type="submit">Consultar</button>
</form>
           
       </div>
     
  
     
   

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
