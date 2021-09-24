<?php

class conexion
{


    public static function conectar(){

        
        $nombreServidor="localhost";
        $baseDatos="roles";
        $usuarioServidor="root";
        $password="";

        try {

            $objConexion = new PDO('mysql:host=' . $nombreServidor . ';dbname=' . $baseDatos . ';', $usuarioServidor, $password); //instanciar conexion
            $objConexion->exec("set names utf8");
        } catch (Exception $e) {
            $objConexion = $e;
        }

        return $objConexion;
    }
}
