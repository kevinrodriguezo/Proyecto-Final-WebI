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
	/*
		Funcion para:
			Dirigirnos hacia la vista del login

	*/
		public function login()
	{
	$this->load->view('login/login.php');	
	}


	/*
		Funcion para:
			Permite verificar si el usuario que intenta loguearse esta en bd.
	*/
	public function autenticarse()
	{

		$user = $this->input->post('user');
		$contrasena = $this->input->post('contrasena');

		$r = $this->User_model->autenticarse($user, $contrasena);
		if (sizeof($r) > 0) {
			$this->session->set_userdata('user', $r[0]);
			$data['lista']= $r;
			$this->load->view('usuario/vista_registroauto', $data);

		}else
		{
			echo "Not valid user";
		}
	}
	/*
		Funcion para:
			Destruir la sesion, cuando el ususario quiere salir.

	*/
	public function cerrarSesion()
	{
		$this->session->sess_destroy('user');
		redirect(base_url());
	}
	/*
		Funcion para:
		 verificar que el usuaro se encuentre en nuesta bd.
	*/

		public function cargarDatosUsuario()
	{
	 return $this->User_model->autenticarse();
	 
	}
	/*
		Funcion para:
			Regustrar un nuevo vehiculo en la base de datos.
	*/
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
		 		//Ejemplo de como se debe llamar una funcion.
		 		$this->cargarAutosEnVenta();
		 	}
		
	}
	//Funcion que me dirige hacia la vista para publicar un auto
	//
	public function registroAuto()
	{
	$this->load->view('usuario/vista_registroauto.php');	
	}
	

	/*
		Funcion para:
			Realizar una busqueda de un vehiculo.
	*/
public function buscar()
{
	$r=$this->input->get('search');
	$r=$this->User_model->buscar($r);
	$data['data']= $r;
	$this->load->view('usuario/enventa', $data);
}
	/*
		Funcion para:
			Cargar una lista de autos en venta que se encuentran en la bd.
			y envar los datos a la vista de autos en venta.
	*/
	public function cargarAutosEnVenta()
	{
	 $r= $this->User_model->cargarAutos();
	 $data['data']= $r;
	 $this->load->view('usuario/enventa.php', $data);
	}
	/*
		Funcion para:
			Eliminar un auto en la base de datos.

	*/
	public function eliminarAuto($value='')
	{

		$r= $this->User_model->eliminarAuto($this->input->post('id'));
		$this->cargarAutosEnVenta();
	}
	/*
		Funcion para:
			Buscar los autos que coincidan con la marca Hyundai.

	*/
	public function buscarHyundai()
	{
			
			$r=$this->User_model->buscarHy('hyundai');
			$data['data']= $r;
	$this->load->view('usuario/enventa', $data);
	}
	/*
		Funcion para:
			Buscar los autos que coincidan con la marca Honda.

	*/

	public function buscarHonda($value='')
	{
		$r=$this->User_model->buscarHy('honda');
			$data['data']= $r;
	$this->load->view('usuario/enventa', $data);
	}
	/*
		Funcion para:
			Buscar los autos que coincidan con la marca Nissan.

	*/
	public function buscarNiss($value='')
	{
		$r=$this->User_model->buscarHy('nissan');
			$data['data']= $r;
	$this->load->view('usuario/enventa', $data);
	}

	
}