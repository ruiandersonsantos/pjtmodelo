<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
       
    public function logarNoSitema($email, $senha){
        
        $this->db->where('email', $email);
        $this->db->where('senha', md5($senha));
        
        return $this->db->get("usuarios")->row_array();
    }
    
    public function buscarPorEmailCpf($email, $cpf){
        
        $this->db->where('email', $email);
        $this->db->where('cpf', md5($cpf));
        
        return $this->db->get("usuarios")->row_array();
        
    }
    
     public function alteraSenha($usuario){
         $this->db->where('id', $usuario['id']);
         return $this->db->update("usuarios", $usuario);
     }
}