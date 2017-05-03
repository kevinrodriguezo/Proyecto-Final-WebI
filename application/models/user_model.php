<?php
class User_model extends CI_Model {

  //Funcion para registrar  un usuario en la bd.
  function save($user)
  {
    $r = $this->db->insert('usuario', $user);
    return $r;
  }
   //Funcion para registrar  un auto en la bd.
   function save_auto($auto)
  {
    $r = $this->db->insert('vehiculo', $auto);
    return $r;
  }
  //Funcion que sirve para optener mediante una consulta a la base de datos una lista con los autos disponibles para la venta.
  public function cargarAutos($value='')
  {
    $query=$this->db->get('vehiculo');
    return $query->result_array();
  }
  //Funcion que sirve para optener mediante una consulta a la base de datos la informacion correspondiente 
  //a los parametros que se ingresaron para realizar una consulta.
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
  //Funcion que se encarga de eliminar un vehiculo de la base de datos.
 function eliminarAuto($id)
 {
    $this->db->delete('vehiculo', array('id' => $id)); 
 }
 public function buscarHy($valor)
 {
   $this->db->select('*');
    $this->db->from('vehiculo');
    $this->db->like('marca',$valor);
    
    //luego unifico
    $this->db->order_by('id','desc'); 
    $query = $this->db->get(); 
    return $query->result_array();
 }


}