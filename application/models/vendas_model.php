<?php
class Vendas_model extends CI_Model {

    public function salva ($venda){
        return $this->db->insert("vendas", $venda);
    }
}