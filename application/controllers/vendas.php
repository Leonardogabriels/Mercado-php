<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // garantir que o cliente n tenha acesso.

class Vendas extends CI_Controller{
    public function nova(){
       $usuario = autoriza();

       $this->load->model('vendas_model');
       $vendas = array(
        "produto_id" =>$this->input->post("produto_id"),
        "comprador_id"=> $usuario["id"],
        "data_de_entrega"=>dataPtBrParaMySql($this->input->post("data_de_entrega"))
       );
       $this->vendas_model->salva( $vendas );
       $this->session->set_flashdata("success","pedido de compra efetuado com sucesso");
       redirect("/");
    }
    public function index(){
        $usuario =autoriza();
        $this->load->model("produtos_model");
        $produtosVendidos = $this->produtos_model->buscarVendidos($usuario);
        $dados = array("produtosVendidos"=> $produtosVendidos);
        $this->load->view("vendas/index",$dados);
    }
}