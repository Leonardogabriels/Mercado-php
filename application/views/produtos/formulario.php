
        <h1>Cadastro de novo produto:</h1>
        
<?php 
echo form_open("produtos/novo");
echo form_label("Nome:","nome");
echo form_input(array(
    "name"=> "nome",
    "id"=>"nome",
    "class"=>"form-control",
    "maxlength"=> "255",
    "value"=> set_value("nome","")
));
echo form_error("nome");

echo form_label("preco:","preco");
echo form_input(array(
    "name"=> "preco",
    "id"=>"preco",
    "class"=>"form-control",
    "maxlength"=> "255",
    "type"=> "number",
    "value"=> set_value("preco","")
));
echo form_error("preco");

echo form_textarea(array(
    "name"=> "descricao",
    "class"=> "form-control",
    "id"=> "descricao",
    "value"=> set_value("descricao","")
    
));
echo form_error("descricao");

echo form_button(array(
    "class"=>"btn btn-primary",
    "content"=> "cadastrar",
    "type"=> "submit"
));
echo form_close();?>

