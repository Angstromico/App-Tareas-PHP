<?php

namespace Models;

use Config\Database;

class Task {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM Tarea ORDER BY fecha DESC";
        $result = pg_query($this->db, $query);
        return pg_fetch_all($result) ?: [];
    }

    public function getById($id) {
        $id = pg_escape_string($this->db, $id);
        $query = "SELECT * FROM Tarea WHERE id = $id";
        $result = pg_query($this->db, $query);
        if (pg_num_rows($result) == 1) {
            return pg_fetch_assoc($result);
        }
        return null;
    }

    public function create($titulo, $descripcion) {
        $titulo = pg_escape_string($this->db, $titulo);
        $descripcion = pg_escape_string($this->db, $descripcion);
        $query = "INSERT INTO Tarea (titulo, descripcion) VALUES ('$titulo', '$descripcion')";
        return pg_query($this->db, $query);
    }

    public function update($id, $titulo, $descripcion) {
        $id = pg_escape_string($this->db, $id);
        $titulo = pg_escape_string($this->db, $titulo);
        $descripcion = pg_escape_string($this->db, $descripcion);
        $query = "UPDATE Tarea SET titulo = '$titulo', descripcion = '$descripcion' WHERE id = '$id'";
        return pg_query($this->db, $query);
    }

    public function delete($id) {
        $id = pg_escape_string($this->db, $id);
        $query = "DELETE FROM Tarea WHERE id = $id";
        return pg_query($this->db, $query);
    }
}
