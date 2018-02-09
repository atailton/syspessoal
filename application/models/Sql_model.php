<?php

class Sql_model extends CI_Model {



  public function getUserLogin($usuarioBusca)
	{

            $query = $this->db->query("SELECT COUNT(pk_usuario)FROM usuario WHERE email = '{$usuarioBusca}'");
             return $query->result_array();

	}

 

}
?>
