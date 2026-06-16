<?php

namespace Config;

class Database {
    private static $conexion = null;

    public static function getConnection() {
        if (self::$conexion === null) {
            $host = getenv('DB_HOST') ?: "localhost";
            $username = getenv('DB_USER') ?: "postgres";
            $password = getenv('DB_PASSWORD') ?: "password";
            $database = getenv('DB_NAME') ?: "postgres";
            $port = getenv('DB_PORT') ?: "5432";

            $conn_string = "host=$host port=$port dbname=$database user=$username password=$password";
            self::$conexion = pg_connect($conn_string);

            if (!self::$conexion) {
                die('No se pudo conectar: ' . pg_last_error());
            }
        }
        return self::$conexion;
    }
}
