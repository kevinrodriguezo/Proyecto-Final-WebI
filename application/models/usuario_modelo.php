<?php
class Usuario_modelo extends CI_Model {

  
  function salvar($user)
  {
    $r = $this->db->insert('usuario', $user);
    return $r;
  }
   function instrumentos() {
    $query = $this->db->select('nombre');
    $query = $this->db->from('instrumento');
    $query = $this->db->get();

    return $query;
  } 


   function autenticarse($user, $pass) {
    $query = $this->db->get_where('musico', array('nombre' => $user, 'contrasena' => $pass));

	  return $query->result_object();
  }



 
 




}