<?php
class User_model extends CI_Model {

  
  function save($user)
  {
    $r = $this->db->insert('usuario', $user);
    return $r;
  }



   function autenticarse($user, $pass) {
    $query = $this->db->get_where('usuario', array('user' => $user, 'contrasena' => $pass));

	  return $query->result_object();
  }



 
 




}