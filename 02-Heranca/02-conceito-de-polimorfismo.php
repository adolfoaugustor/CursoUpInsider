<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo</title>
    </head>
    <body>
        <?php
        require('./inc/config.inc.php');
        $boleto = new Polimorfismo('Curso PHP', '350.00');
        $boleto->Pagar();
        
        echo "<pre>";
        print_r($boleto);
        echo "<pre>";
        echo "<hr>";
        
        $deposito = new PolimorfismoDeposito('Curso PHP', '350.00');
        $deposito->Pagar();
        
        echo "<pre>";
        var_dump ($deposito);
        echo "<pre>";
        echo "<hr>";
        
        $cartao = new PolimorfismoCartao('Curso PHP', '350.00');
        $cartao->Pagar();
        $cartao->Pagar(10);
        
        echo "<pre>";
        var_dump($cartao);
        echo "<pre>";
        echo "<hr>";
        ?>
    </body>
</html>
