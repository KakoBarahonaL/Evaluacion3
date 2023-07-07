<?php
    //var_dump($_POST);
    require ("Conexion.php");
        session_start();   

            $conexion = new Conexion();
            $conexion->Conecta();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["rut"])){
                $rut=$_POST["rut"];
                $rut1=$rut;
            } 
        }
        

    $modsql = "SELECT * FROM Usuario WHERE rut = '$rut'";
    $sql = $conexion->Ejecuta($modsql);  
      

    foreach ($sql as $rut) {
                   
           $rut['rut'];
           $rut['nombres'];
           $rut['apellido_paterno'];
           $rut['apellido_materno'];
           $rut['direccion'];
           $rut['telefono'];
           $rut['clave'];
           $rut['codigo'];                  
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
        <h3> Modificacion de Usuarios </h3>           
    </div>
           
    <nav class="menu">               
        <a href="../panel.php">Panel de Administrador</a>
        <a href="ingreso.php">Ingresar Usuarios</a>
        <a href="../eliminacion.php">Eliminar Usuarios</a>                                
    </nav>    
</header>
    <h2 class="titulo2">Modificacion Datos de Usuario</h2> 
        <form action="ModifDatos2.php" method="post">
            <table class= "tablaIngreso">
                <tr>
                    <td>
                        <p>RUT:</p>
                        <input type="text" name="rut" id="rut" value="<?php echo $rut['rut']; ?>" > <br>
                        <p>Nombres:</p>
                        <input type="text" name="nombres" id="nombres" value="<?php echo $rut['nombres']; ?>"> <br>
                        <p>Apellido Paterno:</p>
                        <input type="text" name="apellidop" id="apellidop" value="<?php echo $rut['apellido_paterno']; ?>"> <br>
                        <p>apellido Materno:</p>
                        <input type="text" name="apellidom" id="apellidom" value="<?php echo $rut['apellido_materno']; ?>"> <br>
                        <p>Direccion:</p>
                        <input type="text" name="direccion" id="direccion" value="<?php echo $rut['direccion']; ?>"> <br>
                        <p>Teléfono:</p>
                        <input type="text" name="telefono" id="telefono" value="<?php echo $rut['telefono']; ?>"> <br>
                        <p>Clave:</p>
                        <input type="text" name="clave" id="clave" value="<?php echo $rut['clave']; ?>"> <br>
                        <p>Código:</p>
                        <input type="text" name="codigo" id="codigo" value="<?php echo $rut['codigo']; ?>"> <br>
                    </td>
                </tr>    
            </table>           

            <table>
                <input class ="btn" type="submit" value="Modificar">
            </table>
        </form>  
        
        <?php        

?>        