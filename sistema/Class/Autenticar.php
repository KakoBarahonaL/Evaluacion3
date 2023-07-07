<?php
/*Creacion de Clase Autenticar*/
/**
 * Autor: PGATICA
 * Fecha: 19-jun-2023
 */
require ("Class/Conexion.php");
session_start();
Class Autenticar{
    private $rut;
    private $clave;
    private $nombres;
    private $apellido_p;
    private $apellido_m;
    private $direccion;
    private $telefono;
    private $codigo;

    public $valor;
    public $fila;

    public function __construct($rut,$clave){
        $this->rut = $rut;
        $this->clave = $clave;
        
    }

    public function Validar(){
        $conexion = new Conexion();
        $conexion->Conecta();
        
        $consulta = "SELECT * FROM usuario WHERE rut = '$this->rut' AND clave = '$this->clave'";
        
        $resultado = $conexion->Ejecuta($consulta);

        

        if ($resultado->num_rows == 1) {
            $valor = $resultado->fetch_assoc();
            $this->codigo = $valor["codigo"];
            if ($this->codigo == 1){
                $this->nombres = $valor['nombres'];
                $_SESSION["rut"] = $this->rut;
                $_SESSION["nombres"] = $this->nombres;
                
                 
            
             
                header('Location: Panel.php');
            } else {
                $this->nombres = $valor['nombres'];
                $_SESSION["rut"] = $this->rut;
                $_SESSION["nombres"] = $this->nombres;
                header('Location: Panel2.php');
            }


        } else {            
            echo '<script>alert("Usuario no Existe!");</script>';
            echo '<script>window.location = document.referrer;</script>';            
        }

    }

}
?>


