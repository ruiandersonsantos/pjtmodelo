<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function index() {
        
        $this->load->model("clientes_model");
        
        $cliente = array(
            "nome" =>"rui",
            "email" => "rui@teste2",
            "telefone" => "99887766",
            "origem" => "teste"
            );
        
        $retorno = $this->clientes_model->insereCliente($cliente);
        
        
        echo $retorno;

       
    }

}
