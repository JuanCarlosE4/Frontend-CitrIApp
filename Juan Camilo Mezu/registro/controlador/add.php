<?php
require_once ("../modelo/registro.php");
if (isset($_REQUEST["btn_enviar"])){
    
    $modelousuario = new registro();
    $nombre= $_POST["nombre"];
    $telefono= $_POST["telefono"];
    $email= $_POST["email"];
    $password=$_POST["password"];
    $modelousuario->getusuarios($nombre,$telefono,$email,$password);
}else{
    header('Location:../../vista/add.php');
}