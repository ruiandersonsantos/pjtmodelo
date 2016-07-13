<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Formulario extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model("email_model");
        $this->load->model("corretores_model");
        $this->load->model("clientes_model");
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
        // montando o array com dados para o envio de e-mail
        $dados = array("cliente" => $dadosmensagem, "planos" => $planos, "faixas" => $faixas);
        // Criando a mensagem
        $mensagem = $this->load->view('adm/orcamento', $dados, TRUE);
        // pegando o corretor para informar o e-mail que vai receber a msg
        $corretor = $this->corretores_model->buscarCorretor();
        //Chamando metodo que envia email
        $retorno = $this->email_model->enviaEmail($corretor['email'], "Solicitação Orçamento do Site", $mensagem);

        if ($retorno) {
            
            $dadosfiltrados['nome'] = $dadosmensagem['nome'];
            $dadosfiltrados['telefone'] = $dadosmensagem['telefone'];
            $dadosfiltrados['email'] = $dadosmensagem['email'];
            
            $this->insereCliente($dadosfiltrados,'ORCAMENTO');
            redirect('/formulario/enviosucesso');
        } else {

            redirect('/formulario/envioerror');
        }
    }

    public function enviosucesso() {
        $corretor = $this->corretores_model->buscarCorretor();

        $dados = array("corretor" => $corretor);
        $this->load->view('envio_sucesso', $dados);
    }

    public function envioerror() {
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
            $this->insereCliente($dadosmensagem,'FALECONOSCO');
            redirect('/formulario/enviosucesso');
        } else {

            redirect('/formulario/envioerror');
        }
    }

    private function insereCliente($dadoscliente, $origem) {

        $dadoscliente['notifica'] = 1;
        $dadoscliente['status'] = 1;
        $dadoscliente['origem'] = $origem;

        $cliente = $this->clientes_model->buscaClientePorEmail($dadoscliente['email']);

        if (!$cliente) {
            $this->clientes_model->insereCliente($dadoscliente);
        }
    }

}
