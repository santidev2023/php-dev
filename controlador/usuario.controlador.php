<?php

class ControladorUsuario{

     public function ctrIngresoUsuario(){

        if(isset($_POST["ingUsuario"])){
           //para no permitir caracteres especiales se utiliza preg_match
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

                $tabla = "usuarios";
                $item = "usuario";
                $valor = $_POST["ingUsuario"];

                $respuesta = ModeloUsuario::MdlMostrarUsuario($tabla,$item,$valor);

                if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] ==$_POST["ingPassword"]){

                    $_SESSION["iniciarSesion"] = "ok";

                    echo '<script>
                           window.location = "inicio";
                         </script>';
                    
                }else{

                   
                    echo "<script> swal({
                        title: '¡ERROR!',
                        text: 'Error al ingresar, vuelva a intentarlo',
                        type: 'error',
                      });</script>";
                }
            }
        }
    }
}