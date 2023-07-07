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
<body>
    <div class="tablaModifica">
        <h3 class="titulo3">Ingrese Rut de Usuario a Modificar</h3>
        <form class="formulario1" action="ModifDatos.php" method="post">
            
            <label for="Rut">Rut:</label>
            <input type="text" name="rut">
            <br>
            <input class="btn2" type="submit" value="Buscar">
        </form>    
    </div>    
</body>
</html>