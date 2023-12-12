<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // garantir que o cliente n tenha acesso.

class Vendas extends CI_Controller{
    public function nova(){
       $usuario = autoriza();

       $this->load->model(array("vendas_model","usuarios_model","produtos_model"));
       $vendas = array(
        "produto_id" =>$this->input->post("produto_id"),
        "comprador_id"=> $usuario["id"],
        "data_de_entrega"=>dataPtBrParaMySql($this->input->post("data_de_entrega"))
       );
       $this->vendas_model->salva( $vendas );

       //disparar email sempre que um produto foi vendido 
       $this->load->library("email");
       $config["protocol"] = "smtp";
       $config["smtp_host"] = "ssl://smtp.gmail.com";
       $config["smtp_user"] = "codeigniter@gmail.com";
       $config["smtp_pass"] = "123456";
       $config["charset"] = "utf-8";
       $config["mailtype"] = "html";
       $config["newline"] = "\r\n";
       $this->email->initialize($config);

       $produto = $this->produtos_model->busca($vendas["produto_id"]);
       $vendedor = $this->usuarios_model->busca($produto["usuario_id"]);

       $dados = array("produtos"=>$produto);
       $conteudo = $this->load->view("vendas/email.php",$dados,true);
       
       $this->email->from("codeigniter@gmail.com", "Mercado");
       $this->email->to($vendedor["email"]);
       $this->email->subject("Seu produto {$produto['nome']} foi vendido");
       $this->email->message($conteudo);
       $this->email->send();

      
       $this->session->set_flashdata("success","pedido de compra efetuado com sucesso");
       redirect("/");
    }
    public function index(){
        $usuario =autoriza();
        $this->load->model("produtos_model");
        $produtosVendidos = $this->produtos_model->buscarVendidos($usuario);
        $dados = array("produtosVendidos"=> $produtosVendidos);
        $this->load->template("vendas/index",$dados);
    }
}