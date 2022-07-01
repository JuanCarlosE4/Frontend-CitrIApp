<?php
require_once("../../conexion/Conexionn.php");
class registro extends Conexion{

    public function __construct()
    {
        $this->db= parent::__construct();
    }
    public function insertarpasajero($nombre, $telefono,$email,$password){
        $table = $this ->db->prepare ("INSERT INTO usuario (nombre,email, telefono,password)VALUES (:nombre,:email,:telefono,:password)");
        $table->bindParam('nombre',$nombre);
        $table ->bindParam(':email',$email);
        $table ->bindParam('telefono',$telefono);
        $table ->bindParam(':password',$password);
        if ($table->execute()){
            header('Location:../vista/add.php');
        }else{
            header('Location:../vista/add.php');
        }
    }
    public function getusuarios(){
        $rows= null;
        $table = $this->db->prepare("SELECT nombre, telefono, email FROM usuario");
        $table->execute();
        while($result=$table->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }
}
?>