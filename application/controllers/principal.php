<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	/**
Funcion para:
	Dirigirnos hacia la vista principal.
	 */
	public function index()
	{
		$this->load->view('usuario/principal.php');
		
	}
	
}
