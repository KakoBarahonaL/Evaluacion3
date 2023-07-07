<?php
require ("Class/Conexion.php");
//Iniciamos la session
session_start();

// Validar el inicio de sesión

if (!isset($_SESSION['rut'])) {
    // Redirigir al formulario de inicio de sesión si no hay sesión activa
    header('Location: index.php');
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Administrador</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>

<header>    
    
    <div class = "logo">
        <h1 id="principal1">Bienvenido, <?php echo $_SESSION['nombres']; ?></h1>   
        <h3> Panel de Administrador </h3>;             
    </div>
           
    <nav class="menu">               
        <a href="class/ingreso.php">Ingresar usuarios</a>
        <a href="class/modificacion.php">Modificar Usuarios</a>
        <a href="class/eliminacion.php">Eliminar Usuarios</a>   
        <a href="class/cerrar.php">Cerrar Sesion</a>                             
    </nav>    
</header>

<body>
    
    <br>
    <!--<p>Ingreso rut a consultar</p>
    <input type="text" name="rut" id="">
    <input type="submit" value="Consultar">-->

    <h2 class="titulo1">Datos en Sistema</h2>
    <br>

    

    <?php
    
    $conexion = new Conexion();
    $conexion->Conecta();

    $consulta = "SELECT * FROM Usuario";
    //$faq = $conexion->Conecta($consulta);
    //var_dump($consulta);
    $sql = $conexion->Ejecuta($consulta);
    //$sql1 = $sql->fetch_assoc();
    //var_dump($sql1);
    $contfila=1;
    ?>
    
    <table >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Rut</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Clave</th>
      <th scope="col">Código</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($sql as $row) {
    ?><table>
        
        <tr>
        <th scope="row"> <?php echo $contfila ?> </th>
        <td><?php echo $row['rut']; ?></td>
        <td><?php echo $row['nombres']; ?></td>
        <td><?php echo $row['apellido_paterno']; ?></td>
        <td><?php echo $row['apellido_materno']; ?></td>
        <td><?php echo $row['direccion']; ?></td>
        <td><?php echo $row['telefono']; ?></td>
        <td><?php echo $row['clave']; ?></td>
        <td><?php echo $row['codigo']; ?></td>
        </tr>
    </table>

       
    <?php
    $contfila = $contfila + 1;
    }
    ?>
    </tbody>
    </table>
    
    
</body>

</html>