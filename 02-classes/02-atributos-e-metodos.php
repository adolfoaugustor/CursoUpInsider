<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('./class/AtributosMetodos.class.php');
        $pessoa = new AtributosMetodos();
        $pessoa->setUsuario('Adolfo', 26, 'web');
        $usuario = $pessoa->getUsuario();
        echo $usuario;

        echo "<hr>";
        $pessoa->Idade = 'BANANA';
        $pessoa->setUsuario('Marcelo', 15, 'web master');
        $pessoa->setIdade(19);
        $pessoa->Envelhecer();

        echo "<hr>";
        $pessoa->getClass();
        
        ?>
    </body>
</html>
