<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$base = "starcopydb";
$saldo = "saldo";
$pronto = "pronto";
$estrenos = "estrenos";
$maspedido = "maspedido";
$loginform="loginform";
$catalogo = "catalogo";
$consulta = new mysqli($servidor,$usuario,$contraseña,$base);
function comprobar (){
    $servidor = "localhost";
$usuario = "root";
$contraseña = "";
$base = "starcopydb";
    $consulta = new mysqli($servidor,$usuario,$contraseña,$base);
if ($consulta->connect_errno) {
    return false;
}
else {
    return true;
}
}

?>