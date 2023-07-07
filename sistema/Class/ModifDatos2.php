<?php
    require ("Conexion.php");
    
        session_start();   
                
            if ($_SERVER["REQUEST_METHOD"] == "POST") {            
                if (isset ($_POST["nombres"]) && isset($_POST["apellidop"]) && isset($_POST["apellidom"]) && isset($_POST["direccion"]) && isset($_POST["telefono"]) && isset($_POST["clave"]) && isset($_POST["codigo"])) 
                {
                    
                    $nombres = $_POST["nombres"];
                    $apellidop = $_POST["apellidop"];
                    $apellidom = $_POST["apellidom"];
                    $direccion = $_POST["direccion"];
                    $telefono = $_POST["telefono"];
                    $clave = $_POST["clave"];
                    $codigo = $_POST["codigo"];
                    
                } 
            }

            $conexion = new Conexion();
            $conexion->Conecta();     
        
            $rut = $_POST["rut"];
            

            $modificacion="SELECT * FROM Usuario WHERE rut = '$rut'";
            $result = $conexion->Ejecuta($modificacion);
            
            
            if ($result->num_rows > 0) {
               

               $modsql = "UPDATE Usuario SET rut = '$rut', nombres = '$nombres', apellido_materno = '$apellidom', direccion = '$direccion', telefono = '$telefono',
                        clave = '$clave', codigo = '$codigo' WHERE rut = '$rut'";
                      
                if ($conexion->Ejecuta($modsql) === TRUE) {
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
        <h1 id="principal1">Datos Modificados Exitosamente!!!</h1>
                
    </div>
</body>    



<?php
                    
                } else {
                    echo "Error al realizar las modificaciones: ";
                }
            } else {
                echo "El RUT no existe en la base de datos.";
            }
            
?>    