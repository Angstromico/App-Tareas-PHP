<?php
session_start();
$conexion = mysqli_connect(
    'localhost',
    'root',
    'Kervisvasquez1993',
    'phpsql'
);
//if (isset($conexion)) {
//    echo 'Conexiòn establecida <br>';
//}