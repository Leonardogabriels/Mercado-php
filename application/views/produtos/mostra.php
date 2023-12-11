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
    <h1><?= html_escape($produto["nome"])?></h1>
    Preço: <?= html_escape($produto["preco"])?><br/>
    <?= auto_typography(html_escape($produto["descricao"]))?><br/>
    </div>
    <h2>Compre agora mesmo !</h2>

    <?php 
echo form_open("vendas/nova");

echo form_hidden("produto_id",$produto["id"]);

echo form_label("Data de entrega:","data_de_entrega");
echo form_input(array(
    "name"=> "data_de_entrega",
    "class"=>"form-control",
    "id"=>"data_de_entrega",
    "maxlength"=> "255",
    "value"=> ""
));

echo form_button(array(
    "class"=>"btn btn-primary",
    "content"=> "comprar",
    "type"=> "submit"
));
echo form_close();?>
</body>
</html>