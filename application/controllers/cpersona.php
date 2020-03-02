<?php
/**
 * 
 */
class Cpersona extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mpersona');
		$this->load->model('musuario');
		
		
	}

	public function index(){
		$this->load->view('persona/vpersona');

	}
	public function guardar(){
		//persona
		$param['dni'] = $this->input->post('txtDNI');
		$param['nombre'] = $this->input->post('txtNombre');
		$param['appaterno'] = $this->input->post('txtApPaterno');
		$param['apmaterno'] = $this->input->post('txtApMaterno');
		$param['email'] = $this->input->post('txtEmail');
		$param['fecnac'] = $this->input->post('datFecNac');
		//usuario
		$paramUsu['nomUsuario'] = $this->input->post('txtUsuario');
		$paramUsu['clave'] = password_hash($this->input->post('txtClave'),PASSWORD_DEFAULT) ;

		$lastId = $this->mpersona->guardar($param);

		if($lastId > 0) {
			$paramUsu['idPersona'] = $lastId;
			$this->musuario->guardarUsuario($paramUsu);
		}
	}
}