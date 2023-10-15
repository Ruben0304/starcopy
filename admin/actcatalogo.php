

<?php
ini_set('max_execution_time', 1000000);
include("coneccion.php");
if (isset($_POST['texto'])) {
    $fp = fopen($_POST['texto'],"r");

while (!feof($fp)){
    $linea = fgets($fp);
    $quer = "INSERT into $catalogo(`nombre`) VALUES ('$linea') ";
    mysqli_query($consulta,$quer);
  
      
   }

fclose($fp);
echo 'Listo';
}

?>
<!DOCTYPE html>
<html >
    <head>
        <title>Catalogo</title>
        <canvas id=""></canvas></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <form method="POST" action="actcatalogo.php">
            
        
        <h3>Cargar</h3>
    <input type="file" name="texto" >
    <button type="submit" style="background-color: green; color: white; border-radius:5px">Cargar</button>
</form>
    </body>
</html>
