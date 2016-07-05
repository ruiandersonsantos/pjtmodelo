<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produto extends CI_Controller {

    public function cadastrar() {
        $this->load->model("produtos_model");
        $this->load->model("imagem_model");

        $listaimg = $this->imagem_model->listaimagem();

        $produto = array(
            "id" => '',
            "titulo" => '',
            "descricao" => '',
            'status' => 0,
            'ordem' => 0,
            'imagens_id' => 0
        );

        $dados = array("produto" => $produto, "imagens" => $listaimg);
        $this->load->view('adm/produto', $dados);
    }

    public function listar() {
        $this->load->model("produtos_model");
        $retorno = $this->produtos_model->listaProduto();
        $listaprodutos = array("lista" => $retorno);

        $this->load->view('adm/listaproduto', $listaprodutos);
    }

    public function deletar() {

        $this->load->model("produtos_model");

        $id = $this->input->get("id");

        $produto = $this->produtos_model->buscarPorId($id);

        $retorno = $this->produtos_model->delete($produto);

        redirect('produto/listar');
    }

    public function ativar() {

        $this->load->model("produtos_model");

        $id = $this->input->get("id");
        $status = $this->input->get("status");
        $ordem = $this->input->get("ordem");

        $produto = $this->produtos_model->buscarPorId($id);

        if ($status == 1) {
            $produto['status'] = 0;
            $produto['ordem'] = 0;
        } else {
            $produto['status'] = 1;
            $produto['ordem'] = $ordem;
        }




        $this->produtos_model->ativarProduto($produto);

        //$retorno = $this->produtos_model->listaProduto();
        //$listaprodutos = array("lista" => $retorno);
        //$this->load->view('adm/listaproduto', $listaprodutos);
    }

    public function prealterar() {

        $this->load->model("produtos_model");
        $id = $this->input->get("id");
        $produto = $this->produtos_model->buscarPorId($id);

        $this->load->model("imagem_model");

        $listaimg = $this->imagem_model->listaimagem();

        $dados = array("produto" => $produto, "imagens" => $listaimg);
        $this->load->view('adm/produto', $dados);
    }

    public function salvar() {

        $id = $this->input->post("id");

        if ($id === '') {
            $this->gravar();
        } else {
            $this->alterar();
        }
    }

    private function alterar() {
        $this->load->model("produtos_model");
        $produto = $this->input->post();

        $retorno = $this->produtos_model->alterarProduto($produto);

        if ($retorno) {
            $this->session->set_flashdata("sucesso", "Produto alterado com sucesso.");
        } else {
            $this->session->set_flashdata("error", "Problemas na alteração do produto.");
        }

        redirect('produto/listar');
    }

    private function gravar() {
        $this->load->model("produtos_model");
        $produto = $this->input->post();

        $produto['imagens_id'] = abs($produto['imagens_id']);

        $retorno = $this->produtos_model->insereProduto($produto);

        if ($retorno) {
            $this->session->set_flashdata("sucesso", "Produto gravado com sucesso.");
        } else {
            $this->session->set_flashdata("error", "Problemas na gravação do produto.");
        }

        redirect('produto/cadastrar');
    }

}
