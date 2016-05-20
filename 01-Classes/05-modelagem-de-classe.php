<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './class/ModelagemDeClasse.class.php';
        
        $adolfo = new ModelagemDeClasse('Adolfo', 26, 'Programdor', 1200);
        $adolfo->setProfissao('Web Master');
        
        $adolfo->Trabalhar('Um portal', 12000);
        
        var_dump($adolfo);
        echo "<pre>";
        print_r($adolfo);
        echo "</pre>";
        
        ?>
    </body>
</html>
