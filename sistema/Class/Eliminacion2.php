<?php

require ("Conexion.php");
session_start();

$conexion = new Conexion();
$conexion->Conecta();
$rut = $_POST["rut"];
$sql = "SELECT * FROM Usuario WHERE rut = '$rut'";
$result = $conexion->Ejecuta($sql);

if ($result->num_rows > 0) {
    $eliminarsql = "DELETE FROM Usuario WHERE rut = '$rut'";
    if ($conexion->ejecuta($eliminarsql) === TRUE) {
        
        
    } else {
        echo "Error al eliminar los datos: " . $conexion->error;
        
    }
} else {
    echo "El RUT $rut no se encuentra en la base de datos.";
    
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
        
          <img id="logo1" src="../img/check.png">   
        
                
    </div>
    <h1 class="principal2"><?php echo "Los datos asociados al RUT $rut han sido eliminados de la base de datos."; ?></h1>
</body>    

<?php
?>    