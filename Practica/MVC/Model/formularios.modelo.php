<?php

require_once "conexion.php";

class ModeloFormularios{

    static public function mdlRegistro($tabla,$datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES
            (:nombre, :email, :password)");

    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

    if($stmt->execute()){
        return "ok";
    }
    else{
        print_r(Conexion::conectar()->errorInfo());
    }

    $stmt->close();
    $stmt=null;

    }

    static public function mdlSeleccionarRegistros($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM 
                $tabla ORDER BY id DESC");

        $stmt->execute();

        return $stmt -> fetchAll(); 
    
        $stmt->close();

        $stmt=null;
    
        }

}
