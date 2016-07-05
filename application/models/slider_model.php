<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Slider_model extends CI_Model {

    // Select para carregar as imagens para slider
    public function listaImagemSlider() {
        return $this->db->query("select * from img_slider ")->result_array();
    }

    // Select para carregar slider
    public function listaSlider() {
        return $this->db->query("select slider.*, img_slider.nome_arquivo from slider inner join img_slider "
                        . " on img_slider.id = slider.img_id")->result_array();
    }

    public function buscarSliderPorId($id) {

        $this->db->where('id', $id);
        return $this->db->get("slider")->row_array();
    }

    public function alterarSlider($slider) {

        $this->db->where('id', $slider['id']);
        return $this->db->update("slider", $slider);
    }

}
