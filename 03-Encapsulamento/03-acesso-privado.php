<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aulas tutoriais - Encapsulamento</title>
    </head>
    <body> 
        <?php
        require('./inc/Config.inc.php');

        $adolfo = new AcessoPrivado('adolfo', 'contato@gmail.com', 87612345678);

        echo '<pre>';
        print_r($adolfo);
        echo '<br>';
        var_dump($adolfo);
        echo '</pre>';
        ?>
    </body>
</html>
