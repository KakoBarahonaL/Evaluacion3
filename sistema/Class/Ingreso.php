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
        <h3> Ingreso de Usuarios </h3>           
    </div>
           
    <nav class="menu">               
        <a href="../panel.php">Panel de Administrador</a>
        <a href="modificacion.php">Modificar Usuarios</a>
        <a href="../eliminacion.php">Eliminar Usuarios</a>                                
    </nav>    
</header>
<body>

<h2 class="titulo2">Ingrese Datos de Nuevo Usuario</h2>

        <form action="InhgresoDatos.php" method="post">
            <table class="tablaIngreso">
                <tr>
                    <td>
                        <p>RUT: </p>   
                        <input type="text" name="rut" id="rut"> 
                        <p>Nombres:</p>
                        <input type="text" name="nombres" id="nombres"> 
                        <p>Apellido Paterno:</p>
                        <input type="text" name="apellidop" id="apellidop">
                        <p>apellido Materno:</p>
                        <input type="text" name="apellidom" id="apellidom">
                        <p>Direccion:</p>
                        <input type="text" name="direccion" id="direccion">
                        <p>Teléfono:</p>
                        <input type="text" name="telefono" id="telefono">
                        <p>Clave:</p>
                        <input type="text" name="clave" id="clave">
                        <p>Código:</p>
                        <input type="text" name="codigo" id="codigo">
                    </td>
                </tr>    
            </table>           

            <table >
                <input class="btn" type="submit" value="Guardar">
            </table>
        </form>    
</body>
</html>