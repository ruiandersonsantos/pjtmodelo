<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clientes_model extends CI_Model {

    public function insereCliente($cliente) {
        return $this->db->insert("clientes", $cliente);
    }
    
    public function buscaClientePorEmail($email){
        $this->db->where('email', $email);
        return $this->db->get("corretores")->row_array();
    }

   

}
