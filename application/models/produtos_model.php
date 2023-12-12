<?php
class Produtos_model extends CI_Model {

    public function buscarTodos(){
        $this->db->where("vendido", false);
        return $this->db->get("produtos")->result_array();

    }
    public function salvar($produto){
        $this->db->insert("produtos",$produto);
    }
    public function busca($id){
        return $this->db->get_where("produtos",array("id"=>$id))->row_array();

    }
    public function buscarVendidos($usuario){
        $this->db->select("produtos.*, vendas.data_de_entrega");
        $this->db->from("produtos");
        $this->db->join("vendas","vendas.produto_id = produtos.id");
        $this->db->where("vendido", true);
        $this->db->where("usuario_id", $usuario["id"]);
        return $this->db->get()->result_array();

    }

}