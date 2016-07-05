<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Corretores_model extends CI_Model{
    public function buscarCorretor(){
        return $this->db->get("corretores")->row_array();
    }
    
    public function alterarCorretor($corretor){
        $this->db->where('id', $corretor['id']);
        return $this->db->update("corretores",$corretor);
    }
}