<?php
class ComunidadAutonoma {
    private $id;
    private $nombre;

    public function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public static function obtenerTodas($conexion) {
        $query = "SELECT * FROM comunidades_autonomas";
        $result = $conexion->query($query);
        $comunidades = [];

        while ($row = $result->fetch_assoc()) {
            $comunidades[] = new ComunidadAutonoma($row['id'], $row['nombre']);
        }

        return $comunidades;
    }
}
?>