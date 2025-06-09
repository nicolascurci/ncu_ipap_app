<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Bienvenido, " . $_SESSION['username'] . " | <a href='logout.php'>Cerrar sesión</a>";
} else {
    echo "<a href='login.php'>Iniciar sesión</a>";
}
?>