<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Formulario extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model("email_model");
        $this->load->model("corretores_model");
    }

    public function abreformorc() {
        $this->load->model("corretores_model");

        $corretor = $this->corretores_model->buscarCorretor();

        $dados = array("corretor" => $corretor);

        $this->load->view('formulario_orcamento', $dados);
    }

    public function orcamento() {
        
        $dadosmensagem = $this->input->post();
        $planos = array();
        $faixas = array();


        foreach ($dadosmensagem as $value) {

            if (substr(key($dadosmensagem), 0, 5) === "check") {
                $planos[] = substr(key($dadosmensagem), 6) . '<br/>';
            }

            if (substr(key($dadosmensagem), 0, 5) === "faixa") {

                if (!empty($dadosmensagem[substr(key($dadosmensagem), 0, 16)])) {
                    $faixas[] = key($dadosmensagem) . ' - ' . $dadosmensagem[key($dadosmensagem)] . ' vida(s) ' . '<br/>';
                }
            }

            next($dadosmensagem);
        }

        $dados = array("cliente" => $dadosmensagem, "planos" => $planos, "faixas" => $faixas);

        $mensagem = $this->load->view('adm/orcamento', $dados, TRUE);
        $corretor = $this->corretores_model->buscarCorretor();
        //Chamando metodo que envia email
        $retorno = $this->email_model->enviaEmail($corretor['email'], "Solicitação Orçamento do Site", $mensagem);

       

        if ($retorno) {
            redirect('/formulario/enviosucesso');
        } else {
            
            redirect('/formulario/envioerror');
        }
    }
    
    public function enviosucesso(){
        $corretor = $this->corretores_model->buscarCorretor();

        $dados = array("corretor" => $corretor);
        $this->load->view('envio_sucesso', $dados);
    }
    
    public function envioerror(){
        $corretor = $this->corretores_model->buscarCorretor();

        $dados = array("corretor" => $corretor);
        $this->load->view('envio_error', $dados);
    }

    public function faleconosco() {


        $dadosmensagem = $this->input->post();

        $dados = array("cliente" => $dadosmensagem);


        $mensagem = $this->load->view('adm/envia_faleconosco', $dados, TRUE);
        $corretor = $this->corretores_model->buscarCorretor();

        //Chamando metodo que envia email
        $retorno = $this->email_model->enviaEmail($corretor['email'], "Fale Conosco do Site", $mensagem);

         if ($retorno) {
            redirect('/formulario/enviosucesso');
        } else {
            
            redirect('/formulario/envioerror');
        }
    }

}
