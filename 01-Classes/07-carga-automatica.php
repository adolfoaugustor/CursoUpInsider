<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Carga Automática</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');
        
        $classeA = new ClassesObjetos;
        $classeB = new AtributosMetodos;
        $classeC = new ComportamentoInicial('Robson', 27, 'Programador', 2200);
        $classeC = new ComportamentoInicialTeste('Robson', 27, 'Programador', 2200);
        
        var_dump($classeA, $classeB, $classeC);
        ?>
    </body>
</html>
