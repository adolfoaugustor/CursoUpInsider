<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo</title>
    </head>
    <body>
        <?php
        require('./inc/config.inc.php');
        
        // $conta = new Abstracao('Adolfo', 900);
        // $contaDois = new Abstracao('Marcos', 300);

        // $conta->Depositar(1000);
        // $conta->Sacar(500);
        // $conta->Transferir(500, $conta);
        // $conta->Transferir(500, $contaDois);

        // echo "<pre>";
        // var_dump($conta, $contaDois);
        // echo "<pre>";
        // echo "<hr>";
        $cc = new AbstracaoCC('Augusto', 550);
        $cp = new AbstracaoCP('Lee', 200);

        $cc->Depositar(1000);
        $cc->Sacar(500);
        $cc->Transferir(500, $cp);

        $cp->Depositar(1000);
        $cp->Sacar(500);
        $cp->Transferir(500, $cc);

        $cc->VerSaldo();
        $cp->VerSaldo();
        
        echo "<pre>";
        var_dump($cc, $cp);
        echo "<pre>";
        echo "<hr>";
        
        ?>
    </body>
</html>
