<?php
session_start();

$host = getenv('DB_HOST') ?: "ec2-3-233-100-43.compute-1.amazonaws.com";
$username = getenv('DB_USER') ?: "etsoarkokaxwiz";
$password = getenv('DB_PASSWORD') ?: "5a5fa9782f4bbb0e6ba3acdd5ee4e595dce5158627e42961c0ea080892cb7dbc";
$database = getenv('DB_NAME') ?: "dd4lvfi0knmca1";
$port = getenv('DB_PORT') ?: "5432";

$conexion = pg_connect("host=".$host." port=".$port." dbname=".$database." user=".$username." password=".$password)
or die('No se puedo conectar: ' . pg_last_error());
