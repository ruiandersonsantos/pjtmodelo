<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Corretor extends CI_Controller {

    public function adm() {

        autoriza();

        $this->load->model("corretores_model");

        $corretor = $this->corretores_model->buscarCorretor();

        $dados = array("corretor" => $corretor);

        $this->load->view('adm/corretor', $dados);
    }

    public function index() {

        $this->load->model("corretores_model");
        $this->load->model("produtos_model");
        $this->load->model("slider_model");

        $corretor = $this->corretores_model->buscarCorretor();
        $produtos = $this->produtos_model->listaProdutosativos();
        $slider = $slider = $this->slider_model->listaSlider();

        $dados = array("corretor" => $corretor, "produtos" => $produtos, "slider" => $slider);

        $this->load->view('principal', $dados);
    }

//    public function visualizar() {
//        
//        $this->load->model("corretores_model");
//
//        $corretor = $this->corretores_model->buscarCorretor();
//
//        $dados = array("corretor" => $corretor);
//
//        $this->load->view('corretor/dados', $dados);
//    }

    public function alterar() {

        $this->load->model("corretores_model");

        $corretor_atualiza = array(
            "id" => $this->input->post("id"),
            "nome" => $this->input->post("nome"),
            "endereco" => $this->input->post("endereco"),
            "numero" => $this->input->post("numero"),
            "complemento" => $this->input->post("complemento"),
            "bairro" => $this->input->post("bairro"),
            "cidade" => $this->input->post("cidade"),
            "estado" => $this->input->post("estado"),
            "titulosite" => $this->input->post("titulosite"),
            "slogan" => $this->input->post("slogan"),
            "titulobiografia" => $this->input->post("titulobiografia"),
            "biografia" => $this->input->post("biografia"),
            "linkvideo" => $this->input->post("linkvideo"),
            "linkgoogle" => $this->input->post("linkgoogle"),
            "linkfacebook" => $this->input->post("linkfacebook"),
            "linktwitter" => $this->input->post("linktwitter"),
            "telefone" => $this->input->post("telefone"),
            "celular" => $this->input->post("celular"),
            "email" => $this->input->post("email")
        );


        $retorno = $this->corretores_model->alterarCorretor($corretor_atualiza);

        if ($retorno) {
            $this->session->set_flashdata("sucesso", "Alteração realizada com sucesso.");
        } else {
            $this->session->set_flashdata("error", "Problemas na alteração dos dados.");
        }
        //$this->load->view('corretor/resposta');
        //$this->load->view('/');
        redirect('corretor/adm');
    }

}
