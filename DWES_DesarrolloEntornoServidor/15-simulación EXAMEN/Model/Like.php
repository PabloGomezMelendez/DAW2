<?php
require_once 'FotografiasDB.php';
require_once 'Usuario.php';
require_once 'Foto.php';
class Like
{
	private $id_foto;
	private $id_usuario;

	function __construct($id_foto = 0, $id_usuario = 0)
	{
		$this->id_foto = $id_foto;
		$this->id_usuario = $id_usuario;
	}

	/**
	 * Get the value of id_foto
	 */
	public function getId_foto()
	{
		return $this->id_foto;
	}

	/**
	 * Set the value of id_foto
	 *
	 * @return  self
	 */
	public function setId_foto($id_foto)
	{
		$this->id_foto = $id_foto;

		return $this;
	}

	/**
	 * Get the value of id_usuario
	 */
	public function getId_usuario()
	{
		return $this->id_usuario;
	}

	/**
	 * Set the value of id_usuario
	 *
	 * @return  self
	 */
	public function setId_usuario($id_usuario)
	{
		$this->id_usuario = $id_usuario;

		return $this;
	}

	public function insert()
	{
		$conexion = FotografiasDB::connectDB();
		$insercion = "INSERT INTO likes (id_foto, id_usuario) VALUES ($this->id_foto, $this->id_usuario)";
		$conexion->exec($insercion);
	}
	public function delete()
	{
		$conexion = FotografiasDB::connectDB();
		$borrado = "DELETE FROM likes WHERE id_foto=$this->id_foto AND id_usuario=$this->id_usuario";
		$conexion->exec($borrado);
	}
	public function getAllUserLikeThisFoto() {
		
	}
}
