<?php
session_start();
$conexion = mysqli_connect(
    'postgresql-angular-05318',
    'etsoarkokaxwiz',
    '5a5fa9782f4bbb0e6ba3acdd5ee4e595dce5158627e42961c0ea080892cb7dbc',
    'Tarea'
);
//if (isset($conexion)) {
//    echo 'Conexiòn establecida <br>';
//}