<?php

class Conexion{

   static public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=sistema_user","root","");
        
        //para que pueda ingresar caracteres latino
        $link->exec("set names utf8");

        return $link;
    }
}