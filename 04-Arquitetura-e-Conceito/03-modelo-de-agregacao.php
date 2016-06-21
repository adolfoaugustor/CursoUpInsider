<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Aulas tutoriais</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');
        $dimble = new AssociacaoCliente('Augustus', 'aug@gmail.com');
        $prophp = new AgregacaoProduto('20', 'antonio', 350.10);
        $wsphp = new AgregacaoProduto('21', 'mario', 50.10);
        $prohtml = new AgregacaoProduto('22', 'walter', 100.10);

        $outrocurso= new stdClass();
        $outrocurso->Produto = '23';
        $outrocurso->Nome = 'mirla';
        $outrocurso->Valor = 150.10;

        $carrinho = new AgregacaoCarrinho($dimble);

        $carrinho->Add($prophp);
        $carrinho->Add($prohtml);
        $carrinho->Add($wsphp);

        $carrinho->Remove($wsphp);
        $carrinho->Remove($prophp);

        echo "<pre>";
        var_dump($carrinho);
        echo "<hr>";
        var_dump($dimble, $prophp, $carrinho, $outrocurso);
        echo "<pre>";


        ?>
</body>
</html>
