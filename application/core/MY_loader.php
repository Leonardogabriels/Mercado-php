<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
    public function template($nome, $dados = array()) {
        parent::view("cabecalho.php");
        parent::view($nome, $dados);
        parent::view("rodape.php");
    }
}