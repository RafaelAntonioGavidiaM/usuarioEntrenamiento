<?php

require_once "../modelo/usuarioModelo.php";

class usuarioControl{
    public $idUsuario;
    public $nombre;
    public $apellido;
    public $email;
    public $contraseña;
    public $idRol;

    public function ctrlInsertar(){


        $objRespuesta=usuarioModelo::mdlInsertar($this->nombre,$this->apellido,$this->email,$this->contraseña,$this->id);
        echo json_encode($objRespuesta);

    }
     public function cargarRoles()
    {
        $objRespuesta=usuarioModelo::cargarRoles();
        echo json_encode($objRespuesta);
    }

}

$objUsuario = new usuarioControl();


if(isset($_POST["nombre"]) &&isset($_POST["apellido"]) && isset($_POST["email"]) && isset($_POST["contraseña"]) && isset($_POST["idRol"])){
$objUsuario->nombre=$_POST["nombre"];
$objUsuario->apellido=$_POST["apellido"];
$objUsuario->email=$_POST["email"];
$objUsuario->contraseña=$_POST["contraseña"];
$objUsuario->idRol=$_POST["idRol"];
$objUsuario->ctrlInsertar();



}

if(isset($_POST["cargarRoles"])){
    $objUsuario->cargarRoles();


}