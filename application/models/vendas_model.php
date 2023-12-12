<?php
class Vendas_model extends CI_Model {

    public function salva($venda) {
        $this->db->insert("vendas", $venda);
    
        // Atualiza o status do produto para "vendido" na tabela de produtos
        $dados_atualizados = array("vendido" => 1);
        $this->db->where("id", $venda["produto_id"]);
        $this->db->update("produtos", $dados_atualizados);
    }
}