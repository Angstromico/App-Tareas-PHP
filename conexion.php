<?php
session_start();
$conn_string = "host=ec2-3-233-100-43.compute-1.amazonaws.com port=5432 dbname=dd4lvfi0knmca1 user=etsoarkokaxwiz password=5a5fa9782f4bbb0e6ba3acdd5ee4e595dce5158627e42961c0ea080892cb7dbc";
$conexion = pg_connect(
    $conn_string;
);
//if (isset($conexion)) {
//    echo 'Conexiòn establecida <br>';
//}
