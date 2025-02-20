<?php
require_once '../Model/MantenimientoDB.php';
class Incidencia
{
    private $id;
    private $descripcion;
    private $profesor;
    private $fecha;
    private $estado;
    private $admin;

    function __construct($id = 0, $descripcion = "", $profesor = "", $fecha = "", $estado = "", $admin = "")
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->profesor = $profesor;
        $this->fecha = $fecha;
        $this->estado = $estado;
        $this->admin = $admin;
    }

    public function insert()
    {
        $conexion = MantenimientoDB::connectDB();
        $insercion = "INSERT INTO incidencia (descripcion, profesor, fecha, estado) 
                        VALUES ('$this->descripcion', '$this->profesor',now(),'PENDIENTE')";
        $conexion->exec($insercion);
    }
    public function delete()
    {
        $conexion = MantenimientoDB::connectDB();
        $borrado = "DELETE FROM incidencia WHERE id='$this->id'";
        $conexion->exec($borrado);
    }
    public function update()
    {
        $conexion = MantenimientoDB::connectDB();
        $update = "UPDATE incidencia SET estado='$this->estado', admin=$this->admin WHERE id='$this->id'";
        $conexion->exec($update);
    }
    public static function getIncidencias()
    {
        $conexion = MantenimientoDB::connectDB();
        $seleccion = "SELECT * FROM incidencia";
        $consulta = $conexion->query($seleccion);
        $incidencias = [];
        while ($registro = $consulta->fetchObject()) {
            $incidencias[] = new Incidencia($registro->id, $registro->descripcion, $registro->profesor, $registro->fecha, $registro->estado, $registro->admin);
        }
        return $incidencias;
    }
    public static function getIncidenciaById($id)
    {
        $conexion = MantenimientoDB::connectDB();
        $seleccion = "SELECT * FROM incidencia WHERE id='$id'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $usuario = new Incidencia($registro->id, $registro->descripcion, $registro->profesor, $registro->fecha, $registro->estado, $registro->admin);
        return $usuario;
    }

    public static function getIncidenciaByIdAdmin($idAdmin)
    {
        $conexion = MantenimientoDB::connectDB();
        $seleccion = "SELECT * FROM incidencia WHERE `incidencia`.`admin`='$idAdmin'";
        $consulta = $conexion->query($seleccion);
        $incidencias = [];
        while ($registro = $consulta->fetchObject()) {
            $incidencias[] = new Incidencia($registro->id, $registro->descripcion, $registro->profesor, $registro->fecha, $registro->estado, $registro->admin);
        }
        return $incidencias;
    }

    public static function getIncidenciaResueltasByIdAdmin($idAdmin)
    {
        $conexion = MantenimientoDB::connectDB();
        $seleccion = "SELECT * FROM incidencia WHERE `incidencia`.`admin`='$idAdmin' and `incidencia`.`estado`='RESUELTA'";
        $consulta = $conexion->query($seleccion);
        $incidencias = [];
        while ($registro = $consulta->fetchObject()) {
            $incidencias[] = new Incidencia($registro->id, $registro->descripcion, $registro->profesor, $registro->fecha, $registro->estado, $registro->admin);
        }
        return $incidencias;
    }

    public static function getIncidenciaByEstado($estado)
    {
        $conexion = MantenimientoDB::connectDB();
        $seleccion = "SELECT * FROM incidencia WHERE `incidencia`.`estado`='$estado' ";
        $consulta = $conexion->query($seleccion);
        $incidencias = [];
        while ($registro = $consulta->fetchObject()) {
            $incidencias[] = new Incidencia($registro->id, $registro->descripcion, $registro->profesor, $registro->fecha, $registro->estado, $registro->admin);
        }
        return $incidencias;
    }

    public static function cambioAdminIncidencia($idActualAdmin, $idNuevoAdmin)
    {
        $conexion = MantenimientoDB::connectDB();
        $update = "UPDATE incidencia SET  admin=$idNuevoAdmin WHERE `incidencia`.`admin`='$idActualAdmin'";
        $conexion->exec($update);
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getProfesor()
    {
        return $this->profesor;
    }
    public function getFecha()
    {
        return date("d/m/Y", strtotime($this->fecha));
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getAdmin()
    {
        return $this->admin;
    }
    public function setAdmin($admin)
    {
        $this->admin = $admin;
        return $this;
    }
}
