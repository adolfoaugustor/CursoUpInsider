<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aulas tutoriais - Encapsulamento</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');

        $ronald = new AcessoProtegido('ronald', 'roanl@hotmail.com');
        $ronald->Nome = 'roni santos';
        //$ronald->Email = 'roni@gmail.com';

        $ronald->setEmail('roni123@gmail.com');
        //$ronald->setNome('ramirez');

        echo '<pre>';
        print_r($ronald);
        echo "<hr><br>";

        $bia = new AcessoProtegidoFilha('biatriz', 'cabral@email.com');
        //$bia->setNome();

        $bia->addCpf('bia', '12309834576');

        var_dump($ronald, $bia);
        echo '</pre>';
        ?>
</body>
</html>
