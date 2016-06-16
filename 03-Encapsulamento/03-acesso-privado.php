<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aulas tutoriais - Encapsulamento</title>
    </head>
    <body> 
        <?php
        require('./inc/Config.inc.php');

        $adolfo = new AcessoPrivado(54321, 'Contato', 876);
        echo '<pre>';
        print_r($adolfo);
        echo '</pre>';
        ?>
    </body>
</html>
