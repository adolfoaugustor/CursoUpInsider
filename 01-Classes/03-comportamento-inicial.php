<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './class/ComportamentoInicial.class.php';
        
//        $adolfo = new ComportamentoInicial;;
//        $adolfo->Nome = "Adolfo";
//        $adolfo->Salario = "2000";
//        
        $adolfo = new ComportamentoInicial('Adolfo', 17, 'Estagiário de desenvolvimento', 2000);
        $marcos = new ComportamentoInicial('Marcos', 22, 'Desenvolvedor Pleno', 1500);
        $abraao = new ComportamentoInicial('Abraao', 33, 'Desenvolvedor Junior', 1000);
        $adolfo->Ver();
        
        ?>
    </body>
</html>
