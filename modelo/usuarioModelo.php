<?php

require "conexion.php";

class usuarioModelo{

    public static function mdlInsertar($n,$a,$e,$c,$id){
        $mensaje="";

        $objInsertar=conexion::conectar()->prepare("Insert into usuario(nombre,apellido,email,contraseña,idRol) values (:n,:a,:e,:c,:id)")
        $objInsertar->bindParam(":n",$n,PDO::PARAM_STR);
        $objInsertar->bindParam(":a",$a,PDO::PARAM_STR);
        $objInsertar->bindParam(":e",$e,PDO::PARAM_STR);
        $objInsertar->bindParam(":c",$c,PDO::PARAM_STR);
        $objInsertar->bindParam(":id",$id,PDO::PARAM_INT);

        if($objInsertar->execute()){
            $mensaje="ok";


        }else{
            $mensaje="error";

        }
        
        return $mensaje;





    }



}