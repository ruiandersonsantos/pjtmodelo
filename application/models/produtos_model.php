<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produtos_model extends CI_Model {

    public function insereProduto($produto) {
        return $this->db->insert("produtos", $produto);
    }

    public function ativarProduto($produto) {
        $this->db->query("UPDATE produtos SET ordem =" . $produto["ordem"] . ", status='" . $produto["status"] . "' WHERE id='" . $produto["id"] . "' ");
    }

    public function alterarProduto($produto) {



        $this->db->where('id', $produto['id']);
        $this->db->update("produtos", $produto);
    }

    public function listaProduto() {
       return $this->db->query("select produtos.*, imagens.nome_arquivo from produtos inner join imagens "
                        . "on produtos.imagens_id = imagens.id order by ordem desc")->result_array();
    }
    
    public function listaProdutosativos() {
       return $this->db->query("select produtos.*, imagens.nome_arquivo from produtos inner join imagens "
                        . "on produtos.imagens_id = imagens.id where produtos.status = 1 order by ordem desc")->result_array();
    }

    public function buscarPorId($id) {

        $this->db->where('id', $id);
        return $this->db->get("produtos")->row_array();
    }

    public function delete($produto) {

        $this->db->where('id', $produto['id']);
        $this->db->delete("produtos", $produto);
    }

}
