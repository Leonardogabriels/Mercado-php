
            <h1>Minhas Vendas</h1>
        <table class="table">
        <?php foreach($produtosVendidos as $produtos):?>
            <tr>
                <td><?= $produtos["nome"]?></td>
                <td><?= dataMysqlParaPtBr($produtos["data_de_entrega"])?></td>
            </tr>
        <?php endforeach?>
        </table>
