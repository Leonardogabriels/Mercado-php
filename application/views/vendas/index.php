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
            <h1>Minhas Vendas</h1>
        <table class="table">
        <?php foreach($produtosVendidos as $produtos):?>
            <tr>
                <td><?= $produtos["nome"]?></td>
                <td><?= dataMysqlParaPtBr($produtos["data_de_entrega"])?></td>
            </tr>
        <?php endforeach?>
        </table>
    </div>
</body>
</html>