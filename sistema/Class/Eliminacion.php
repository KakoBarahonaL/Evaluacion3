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
        <h3> Eliminacion de Usuarios </h3>           
    </div>
           
    <nav class="menu">               
        <a href="../Panel.php">Panel de Administrador</a>
        <a href="class/ingreso.php">Ingresar Usuarios</a>
        <a href="class/modificacion.php">Modificar Usuarios</a>                                
    </nav>    
</header>
<body>
    <div class="tablaModifica">
        <h3 class="titulo3">Ingrese Rut de usuario a eliminar</h3>
        <form class="formulario1" action="Eliminacion2.php" method="post">
            
            
            <label class="label1" for="Rut">Rut:</label>
            <input type="text" name="rut">
            <br>
            <input class="btn2" type="submit" value="Buscar">
        </form>    
</div> 
      
</body>
</html>
