<?php

require_once "conexion.php";

class ModeloAdministrador
{

    /*=============================================
    MOSTRAR 
    =============================================*/

    public static function mdlMostrarAdministrador($tabla, $item, $valor)
    {
        if ($item != null) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY idUsuario DESC");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();

        } else {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY idUsuario DESC");
            $stmt->execute();
            return $stmt->fetchAll();

        }

    }


    /*=============================================
    REGISTRO DE PERFIL
    =============================================*/

    public static function mdlIngresarPerfil($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, contrasenia) VALUES (:usuario, :contrasenia)");
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":contrasenia", $datos["contrasenia"], PDO::PARAM_STR);


        if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}


        $stmt->close();

        $stmt = null;

    }

    /*=============================================
    EDITAR PERFIL
    =============================================*/
/*
    public static function mdlEditarPerfil($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, email = :email, password = :password, perfil = :perfil, foto = :foto WHERE id = :id");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
        $stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }

        $stmt->close();

        $stmt = null;

    }
    */

  
  

}
