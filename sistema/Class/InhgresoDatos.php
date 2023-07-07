<?php
//var_dump($_POST);

require ("Conexion.php");
    session_start();   

        $conexion = new Conexion();
        $conexion->Conecta();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["rut"]) && isset($_POST["nombres"]) && isset($_POST["apellidop"]) && isset($_POST["apellidom"]) && isset($_POST["direccion"]) && isset($_POST["telefono"]) && isset($_POST["clave"]) && isset($_POST["codigo"])) 
        {
            $rut = $_POST["rut"];
            $nombres = $_POST["nombres"];
            $apellidop = $_POST["apellidop"];
            $apellidom = $_POST["apellidom"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $clave = $_POST["clave"];
            $codigo = $_POST["codigo"];

            

            $insql = "INSERT INTO Usuario (rut, nombres, apellido_paterno, apellido_materno, direccion, telefono, clave, codigo)
            values ('$rut', '$nombres', '$apellidop', '$apellidom', '$direccion', '$telefono', '$clave', '$codigo')";

            $sql = $conexion->Ejecuta($insql);
            
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Administrador</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>

<header>    
    
    <div class = "logo">
                   
    </div>
           
    <nav class="menu">               
        <a href="../panel.php">Panel de Administrador</a>                             
    </nav>    
</header>
<body>
    <div class = "imagenCheck">
        <a href="index.html">
          <img id="logo1" src="../img/check.png">
        </a>
        <h1 id="principal1">Datos Ingresados Exitosamente!!!</h1>
                
    </div>
</body>    



<?php
?>    