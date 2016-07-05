<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Teste extends CI_Controller {

    public function contato() {
        $this->load->model("email_model");

        $dadosmensagem = array(
            "nome" => "Rui Anderso Paim Santos",
            "senha" => "12345",
            "site" => "www.rui.com.br"
        );

        $dados = array("mensagem" => $dadosmensagem);

        $mensagem = $this->load->view('adm/envia_faleconosco', $dados, TRUE);

        //Chamando metodo que envia email
        $retorno = $this->email_model->enviaEmail("ruisantos@starsoft.com.br", "Teste Fale Conosco", $mensagem);

        if ($retorno) {
            echo 'Email enviado com sucesso';
        }
    }

}
