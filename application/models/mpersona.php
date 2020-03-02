<?php
/**
 * 
 */
class Mpersona extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function guardar($param){
		$campos = array(
			'dni' => $param['dni'],
			'nombre' => $param['nombre'],
			'appaterno' => $param['appaterno'],
			'apmaterno' => $param['apmaterno'],
			'email' => $param['email'],
			'fecnac' => $param['fecnac']			 
		);

		$this->db->insert('persona',$campos);

		return $this->db->insert_id();
	}
}