<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/**
	Funcion para:
	 Dirigrnos hacia la vista de registro.
	 */
	public function index()
	{
		$this->load->view('usuario/regstrarse.php');
		
	}

	/**
	Funcion para:
	 Capturar los datos de la vista y enviarlos al modelo.
	 */
	public function registrar()
	{

		$nombre= $this->input->post('nombre');
		$primer_apellido= $this->input->post('primer_apellido');
		$segundo_apellido= $this->input->post('segundo_apellido');
		$usuario= $this->input->post('usuario');
		$contrasena= $this->input->post('contrasena');
		$correo= $this->input->post('correo');
		$rol= $this->input->post('rol');
		$usuario = array('nombre' => $nombre, 'primer_apellido' => $primer_apellido,'segundo_apellido' => $segundo_apellido, 'usuario' => $usuario, 'contrasena' => $contrasena, 'correo' => $correo, 'rol' => $rol);
		 	
		 	$r=$this->Usuario_modelo->salvar($usuario);
		 	if(sizeof($r)>0){
		 		redirect('login');
		 	}
		
	}
	
}