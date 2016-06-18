<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Aulas tutoriais - Encapsulamento</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');

        $adolfo = new AcessoPublico('Adolfo', 'adolfoaugustor@gmail.com');
        $adolfo->Email='Adolfoozzy@hotmail.com';
        $adolfo->Nome='Augusto';
        $adolfo->setEmail('adolfoozzy2@hotmail.com');

        echo '<pre>';
        print_r($adolfo);
        echo '</pre><hr><br>';

        var_dump($adolfo);
        ?>
</body>
</html>
