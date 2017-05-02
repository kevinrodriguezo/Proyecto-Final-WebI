<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculo extends CI_Controller {

	public function index()
	{
		$this->load->view('usuario/vista_registroauto.php');
	}
public function venta()
	{
	$this->load->view('usuario/enventa.php');	
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
		 		redirect('login');
		 	}
		
	}
}