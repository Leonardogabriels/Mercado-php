<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produtos extends CI_Controller{
    public function index(){
        $this->load->model("produtos_model");
        $produtos = $this->produtos_model->buscarTodos();


        $dados = array("produtos" =>$produtos);
        $this->load->helper(array("url","currency"));
        $this->load->view("produtos/index.php", $dados);
    }
    public function formulario(){
        $this->load->view("produtos/formulario");
     
    }
    public function novo(){
        $produto =array(
        "nome" => $this->input->post("nome"),
        "descricao" => $this->input->post("descricao"),
        "preco" => $this->input->post("preco")        
        );

        $this->load->model("produtos_model");
        $this->produtos_model->salvar($produto);
        $this->session->set_flashdata("success","Produto cadastrado");
        
        redirect("/");
    }
}