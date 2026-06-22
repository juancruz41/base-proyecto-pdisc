<?php
# Iniciamos la sesión y la base de datos
# Acá podemos meter más configuraciones globales
session_start();
require_once 'src/config/database.php';

# Redirigimos directamente al alumno a la vista de inicio
header('Location: src/views/index.php');
exit;