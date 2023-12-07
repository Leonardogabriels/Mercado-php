<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css")?>">
</head>
<body>
    <div class="container">
        <h1>Cadastro de novo produto:</h1>
<?php 
echo form_open("produtos/novo");
echo form_label("Nome:","nome");
echo form_input(array(
    "name"=> "nome",
    "id"=>"nome",
    "class"=>"form-control",
    "maxlength"=> "255"
));
echo form_label("preco:","preco");
echo form_input(array(
    "name"=> "preco",
    "id"=>"preco",
    "class"=>"form-control",
    "maxlength"=> "255",
    "type"=> "number"
));
echo form_textarea(array(
    "name"=> "descricao",
    "class"=> "form-control",
    "id"=> "descricao"
    
));
echo form_button(array(
    "class"=>"btn btn-primary",
    "content"=> "cadastrar",
    "type"=> "submit"
));
echo form_close();?>

</body>
</html>