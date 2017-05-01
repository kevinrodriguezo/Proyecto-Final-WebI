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
		$user= $this->input->post('user');
		$contrasena= $this->input->post('contrasena');
		$correo= $this->input->post('correo');
		$rol= $this->input->post('rol');
		$usuario = array('nombre' => $nombre, 'primer_apellido' => $primer_apellido,'segundo_apellido' => $segundo_apellido, 'user' => $user, 'contrasena' => $contrasena, 'correo' => $correo, 'rol' => $rol);
		 	
		 	$r=$this->User_model->save($usuario);
		 	if(sizeof($r)>0){
		 		redirect('login');
		 	}
		
	}
		public function login()
	{
	$this->load->view('login/login.php');	
	}



	public function autenticarse()
	{

		$user = $this->input->post('user');
		$contrasena = $this->input->post('contrasena');

		$r = $this->User_model->autenticarse($user, $contrasena);
		if (sizeof($r) > 0) {
			$data['lista']= $r;
			$this->load->view('usuario/vista_registroauto', $data);

		}else
		{
			echo "Not valid user";
		}
	}
		public function cargarDatosUsuario()
	{
	 return $this->User_model->autenticarse();
	 
	}
	public function registrar_vehiculo()
	{

		$marca= $this->input->post('marca');
		$transmision= $this->input->post('transmision');
		$modelo= $this->input->post('modelo');
		$precio= $this->input->post('precio');
		$descripcion= $this->input->post('descripcion');

		$vehiculo = array('marca' => $marca, 'transmision' => $transmision,'modelo' => $modelo, 'precio' => $precio, 'descripcion' => $descripcion);
		 	
		 	$r=$this->User_model->save_auto($vehiculo);
		 	if(sizeof($r)>0){
		 		redirect('ventasauto');
		 	}
		
	}
	public function venta()
	{
	$this->load->view('usuario/enventa.php');	
	}

	
}