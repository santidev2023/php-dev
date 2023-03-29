<?php

require_once "conexion.php";

class ModeloUsuario{

    static public function MdlMostrarUsuario($tabla, $item, $valor){

        $stmt = Conexion::conectar()->prepare("select * from $tabla where $item = :$item");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt ->execute();

        return $stmt ->fetch();
   
   
    }
}