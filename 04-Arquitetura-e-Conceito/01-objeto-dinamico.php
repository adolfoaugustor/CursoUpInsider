<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Aulas tutoriais - Encapsulamento</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');

        $cliente = new ObjetoDinamico;

        $augusto = new stdClass();
        $augusto->Nome = 'Massakito';
        $augusto->Email = 'massakito@yahoo.com.br';

        $cliente->Novo($augusto);

        $maroac = clone($augusto);
        $maroac->Nome = 'Maroac';
        $maroac->Email = 'email@maroac';
        echo "<pre>";
        var_dump($cliente, $augusto, $maroac);
        echo "<pre>";
        ?>
</body>
</html>
