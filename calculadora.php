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
       <div class="center-calc"  >
           <?php
           
           if (isset($_POST['phd'])) {
         if ($_POST['phd']=="") {
            $ph = 0;
         }
         else {
            $ph=10*$_POST['phd'];
         }
            
            
          }
          else {
            $ph = 0;
        }
        if (isset($_POST['cinco'])) {
            if ($_POST['cinco']=="") {
               $cin = 0;
            }
            else {
               $cin=15*$_POST['cinco'];
            }
               
               
             }
             else {
               $cin= 0;
           }
       if (isset($_POST['psd'])) {
        if ($_POST['psd']=="") {
            $ps = 0;
         }
         else {
            $ps = 5*$_POST['psd'];
           
        }
       }
       else {
        $ps = 0;
    }
        if (isset($_POST['cserie'])) {
            if ($_POST['cserie']=="") {
                $cs= 0;
             }
             else {
        $cs = 2*$_POST['cserie'];
        }
     
   }
   else {
    $cs = 0;
}
    if (isset($_POST['cnovela'])) {
        if ($_POST['cnovela']=="") {
            $cn = 0;
         }
         else {
    $cn = $_POST['cnovela'];
   
}
}
else {
    $cn = 0;
}
if (isset($_POST['j5'])) {
    if ($_POST['j5']=="") {
        $j5= 0;
     }
     else { 
    $j5 = $_POST['j5']*5;
    }

}
else {
    $j5 = 0;
}
 if (isset($_POST['j10'])) {
    if ($_POST['j10']=="") {
        $j10 = 0;
     }
     else {   
    $j10 = $_POST['j10']*10;
   }
}
else {
    $j10 = 0;
}
if (isset($_POST['j25'])) {
    if ($_POST['j25']=="") {
        $j25 = 0;
     }
     else {
    $j25 = $_POST['j25']*25;
    }
 
}
else {
    $j25 = 0;
}
 if (isset($_POST['j50'])) {
    if ($_POST['j50']=="") {
        $j50 = 0;
     }
     else {
    $j50 = $_POST['j50']*50;
  }
 
}
else {
    $j50 = 0;
}
if (isset($_POST['j99'])) {
    if ($_POST['j99']=="") {
        $j99 = 0;
     }
     else {
    $j99 = $_POST['j99']*75;
  }
 
}
else {
    $j99 = 0;
}
if (isset($_POST['j00'])) {
    if ($_POST['j00']=="") {
        $j00 = 0;
     }
     else {
    $j00 = $_POST['j00']*100;
  }
 
}
else {
    $j00 = 0;
}
if (isset($_POST['musicv'])) {
    if ($_POST['musicv']=="") {
        $musicv = 0;
     }
     else {
    $musicv = $_POST['musicv'];
  }
 
}
else {
    $musicv = 0;
}
if (isset($_POST['music'])) {
    if ($_POST['music']=="") {
        $music = 0;
     }
     else {
    $music = $_POST['music']*25;
  }
 
}
else {
    $music = 0;
}
 if (isset($_POST['so'])) {
    if ($_POST['so']=="") {
        $so= 0;
     }
     else {
    $so = $_POST['so']*25;
    }

}
else {
    $so = 0;
}
$ptotal=$ph+$ps+$cs+$cn+$j5+$j10+$j25+$j50+$so+$j99+$j00+$cin+$musicv+$music;
echo "<h1>$$ptotal</h1>"
           ?>
          
<form method="POST" action="calculadora.php">
<input type="number" name="phd" placeholder="  Pelis HD" >




<input type="number" name="psd" placeholder="  Pelis no HD" >
<input type="number" name="cinco" placeholder="  Pelis > 5GB" >



<input type="number" name="cserie" placeholder="  Capitulos HD" >




<input type="number" name="cnovela" placeholder="  Capitulos no HD" >



<input type="number" name="j5" placeholder="  Minijuegos" >




<input type="number" name="j10" placeholder="  Juegos hasta 10GB">




<input type="number" name="j25" placeholder="  Juegos hasta 39GB" >




<input type="number" name="j50" placeholder="  Juegos hasta 69GB" >
<input type="number" name="j99" placeholder="  Juegos hasta 99GB" >




<input type="number" name="j00" placeholder="  Juegos > 100GB" >
<input type="number" name="musicv" placeholder="  Videos musicales" >




<input type="number" name="music" placeholder=" Discografias" >




<input type="number" name="so" placeholder="  Sistemas operativos" >
<button type="submit">Calcular</button>

    
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