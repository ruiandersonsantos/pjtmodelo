<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imagem_model extends CI_Model {
    
    // Select para carregar as imagens dos produtos
    public function listaImagem() {
        return $this->db->query("select * from imagens ")->result_array();
    }
    
  
}