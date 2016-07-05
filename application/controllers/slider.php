<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Slider extends CI_Controller {

    public function index() {

        $this->load->model("slider_model");
       
        $slider = $this->slider_model->listaSlider();
        $img_slider = $this->slider_model->listaImagemSlider();
        
        $dados = array("slider" => $slider, "img_slider" => $img_slider);
        $this->load->view('adm/listaslider', $dados);
    }
    
    
    public function prealterar(){
        
        $this->load->model("slider_model");
        
        $id = $this->input->get("id");
        
        $slider = $this->slider_model->buscarSliderPorId($id);

        $img_slider = $this->slider_model->listaImagemSlider();

        $dados = array("slider" => $slider, "imagens" => $img_slider);
        
        $this->load->view('adm/slider', $dados);
        
    }
    
    public function alterar(){
        
        $this->load->model("slider_model");
        $slider = $this->input->post();

        $retorno = $this->slider_model->alterarSlider($slider);

        if ($retorno) {
            $this->session->set_flashdata("sucesso", "Configuração alterada com sucesso.");
        } else {
            $this->session->set_flashdata("error", "Problemas na alteração da configuração.");
        }

        redirect('slider/index');
        
    }

}
