<?php

// Destruir todas las variables de sesión
session_destroy();

// Redireccionar a la página de inicio de sesión o a cualquier otra página deseada
header("Location: ../index.php");
exit;
?>