<?php
class Produtos_model extends CI_Model {

    public function buscarTodos(){
        return $this->db->get("produtos")->result_array();

    }
    public function salvar($produto){
        $this->db->insert("produtos",$produto);
    }
    public function busca($id){
        return $this->db->get_where("produtos",array("id"=>$id))->row_array();

    }

}