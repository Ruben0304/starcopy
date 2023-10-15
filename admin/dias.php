<?php
//Restas

function dia ($numerod){
    $ayer = date('Y-m-d',strtotime("-$numerod days"));
    return $ayer;
    }
    function mes ($numerom){
        $mesanterior = date('Y-m-d',strtotime("-$numerom months"));
        return $mesanterior;
        }
        function año ($numeroy){
            $añoanterior = date('Y-m-d',strtotime("-$numeroy years"));
            return $añoanterior;
            }
            function diac ($numerod){
                $ayer = date('Y-m-d',strtotime("-$numerod days"));
                return $ayer;
                }
                function mesc ($numerom){
                    $mesanterior = date('Y-m-d',strtotime("-$numerom months"));
                    return $mesanterior;
                    }
                    function añoc ($numeroy){
                        $añoanterior = date('Y-m-d',strtotime("-$numeroy years"));
                        return $añoanterior;
                        }
            //Selecciones 
//usuarios 1

function selectuserd1 ($numero){
    include("coneccion.php");
    $valor = dia ($numero);
$seleccion = "SELECT * from cantusuarios where fecha = '$valor' & actividad = '1'" ;
$resulta = mysqli_query($consulta,$seleccion);
$registros = mysqli_num_rows($resulta);
return $registros;
}
function selectuserm1 ($numero){
    include("coneccion.php");
    $valor = mes($numero);
    $seleccion = "SELECT * from cantusuarios where fecha = '$valor' & actividad = '1'" ;
    $resulta = mysqli_query($consulta,$seleccion);
$registros = mysqli_num_rows($resulta);
return $registros;
    }
    function selectusery1 ($numero){
        include("coneccion.php");
        $valor = año ($numero);
$seleccion = "SELECT * from cantusuarios where fecha = '$valor' & actividad = '1'" ;
$resulta = mysqli_query($consulta,$seleccion);
$registros = mysqli_num_rows($resulta);
return $registros;
        }

        //usuarios 2

        function selectuserd2 ($numero){
            include("coneccion.php");
            $valor = dia ($numero);
        $seleccion = "SELECT * from cantusuarios where fecha = '$valor' & actividad = '2'" ;
        $resulta = mysqli_query($consulta,$seleccion);
        $registros = mysqli_num_rows($resulta);
        return $registros;
        }
        function selectuserm2 ($numero){
            include("coneccion.php");
            $valor = mes($numero);
            $seleccion = "SELECT * from cantusuarios where fecha = '$valor' & actividad = '2'" ;
            $resulta = mysqli_query($consulta,$seleccion);
        $registros = mysqli_num_rows($resulta);
        return $registros;
            }
            function selectusery2 ($numero){
                include("coneccion.php");
                $valor = año ($numero);
        $seleccion = "SELECT * from cantusuarios where fecha = '$valor' & actividad = '2'" ;
        $resulta = mysqli_query($consulta,$seleccion);
        $registros = mysqli_num_rows($resulta);
        return $registros;
                }

                //saldo gastado

                function selectsaldod ($numero){
                    include("coneccion.php");
                    $valor = dia ($numero);
                $seleccion = "SELECT * from cantsaldo where fecha = '$valor' " ;
               
                $resulta = mysqli_query($consulta,$seleccion);
                
                while ($obten=mysqli_fetch_array($resulta)) {
                   $sumando = $obten['cantidad'];
                   $total += $sumando;
               }
                return $total;
                }
                function selectsaldom ($numero){
                    include("coneccion.php");
                    $valor = mes($numero);
                    $seleccion = "SELECT * from cantsaldo where fecha = '$valor' " ;
                    $resulta = mysqli_query($consulta,$seleccion);
                    
                    while ($obten=mysqli_fetch_array($resulta)) {
                       $sumando = $obten['cantidad'];
                       $total += $sumando;
                   }
                    return $total;
              
                    }
                    function selectsaldoy ($numero){
                        include("coneccion.php");
                        $valor = año ($numero);
                $seleccion = "SELECT * from cantsaldo where fecha = '$valor' " ;
                $resulta = mysqli_query($consulta,$seleccion);
                
                while ($obten=mysqli_fetch_array($resulta)) {
                   $sumando = $obten['cantidad'];
                   $total += $sumando;
               }
                return $total;
                }

               
?>