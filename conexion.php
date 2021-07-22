<?php
$sqlp = "CREATE TABLE Tarea(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(30) NOT NULL,
    descripcion TEXT NOT NULL,
    fecha TIMESTAMP NOT NULL UNIQUE
)";
session_start();
$conexion = mysqli_connect(
    'postgresql-angular-05318',
    'etsoarkokaxwiz',
    '5a5fa9782f4bbb0e6ba3acdd5ee4e595dce5158627e42961c0ea080892cb7dbc',
    $sqlp
);
//if (isset($conexion)) {
//    echo 'Conexiòn establecida <br>';
//}