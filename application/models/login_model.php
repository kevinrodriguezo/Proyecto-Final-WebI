<?php
class Login_model extends CI_Model {



function autenticarse($user, $pass) {
    $query = $this->db->get_where('usuario', array('user' => $user, 'contrasena' => $contrasena));

	  return $query->result_object();
  }



}