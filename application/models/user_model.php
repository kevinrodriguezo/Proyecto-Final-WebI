<?php
class User_model extends CI_Model {

  //Funcion para registrar  un usuario en la bd.
  function save($user)
  {
    $r = $this->db->insert('usuario', $user);
    return $r;
  }
   function save_auto($auto)
  {
    $r = $this->db->insert('vehiculo', $auto);
    return $r;
  }
  public function cargarAutos($value='')
  {
    $query=$this->db->get('vehiculo');
    return $query->result_array();
  }
  public function buscar($valor)
  {
    $this->db->select('*');
    $this->db->from('vehiculo');
    $this->db->like('marca',$valor);
    $this->db->or_like('descripcion',$valor);
    //luego unifico
    $this->db->order_by('id','desc'); 
    $query = $this->db->get(); 
    return $query->result_array();
  }

  //Funcion para revisar que un usuario se encuentre registrado cuando intenta  loguearse
   function autenticarse($user, $pass) {
    $query = $this->db->get_where('usuario', array('user' => $user, 'contrasena' => $pass));

	  return $query->result_array();
  }
  	//Funcion para cargar datos del usuario logueado
  /*
  	function cargarDatosUsuario($user, $pass) {
    $query = $this->db->select('id, nombre, primer_apellido,segundo_apellido, user, contrasena, correo,rol');
    $query = $this->db->from('usuario');
    $query = $this->db->where('user' => $user, 'contrasena' => $pass);

    $query = $this->db->get();

    return $query;
    echo $query;
  } 


*/

 function eliminarAuto($id)
 {
    $this->db->delete('vehiculo', array('id' => $id)); 
 }
 




}