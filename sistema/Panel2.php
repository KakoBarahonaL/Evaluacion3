<?php
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
    <title>Sistema de Usuario</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>

<header>    
    
    <div class = "logo">
        <h1>Bienvenido, <?php echo $_SESSION['nombres']; ?>!</h1>
        <h3> Sistema de Usuario </h3>           
    </div>     
    <nav class="menu">
        <a href="class/cerrar.php">Cerrar Sesion</a>                             
    </nav>   
</header>
<body>
    <h3 class="tit1">¡Bienvenido a QPromotor!<h3>
    <div class="mensajeusuario">
        <p> Nos complace darles la más cordial bienvenida a nuestra empresa.<br>
            En QPromotor, estamos comprometidos en brindarles un servicio excepcional y soluciones <br>
            innovadoras para ayudarles a alcanzar sus objetivos de promoción y marketing.<br>
            Nuestro equipo de expertos está listo para trabajar junto a ustedes, ofreciéndoles ideas creativas,<br>
            estrategias efectivas y resultados sobresalientes. Valoramos su confianza en nosotros y nos esforzamos<br>
            por superar sus expectativas en cada proyecto.<br>
            <br>
            En QPromotor, creemos en la importancia de construir relaciones sólidas y duraderas con nuestros clientes.<br>
            Por eso, nos enfocamos en entender sus necesidades y adaptarnos a sus requisitos específicos. Estamos aquí <br>
            para apoyarles en cada paso del camino, desde la planificación hasta la ejecución, para que puedan destacar en<br>
            el mercado y alcanzar el éxito.<br>
            Agradecemos la oportunidad de trabajar con ustedes y esperamos construir una asociación exitosa y fructífera.<br>
            No duden en comunicarse con nosotros en caso de cualquier consulta o requerimiento. Estamos aquí para ayudarles<br>
            y hacer que su experiencia con QPromotor sea excepcional.</p>
    </div>
    <br>
    <h2 class="tit2">¡Bienvenidos a QPromotor, donde su éxito es nuestra prioridad!<h2>
    
</body>

</html>