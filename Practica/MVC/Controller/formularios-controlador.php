<?php

class ControladorFormularios{
    
    static public function ctrRegistro(){

        if (isset($_POST["registroNombre"])){

            $tabla = "registro";

            $datos = array("nombre" => $_POST["registroNombre"],
                            "email" => $_POST["registroEmail"],
                            "password" => $_POST["registroPassword"]);

            $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);

            return $respuesta;

        }
    }


    static public function ctrSeleccionarRegistros(){

        if (isset($_POST["registroNombre"])){

            $tabla = "registro";

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla);

            return $respuesta;

        }
    }
}