<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Arquitetura e Conceito</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');

        $cliente = new AssociacaoCliente('Katsumoto', 'massakito@yahoo.com.br');
        $login = new AssociacaoLogin($cliente);

        if ($login->getLogin()):
            echo "Gerenciando o Cliente id: {$login->getCliente()->getCliente()}<br>";
            echo "{$login->getCliente()->getNome()} Logou usando o e-mail {$login->getCliente()->getEmail()}<hr>";
        else:
            echo 'Error ao logar 8P';
        endif;

        echo "<pre>";
        var_dump($cliente, $login);
        echo "<pre>";
        ?>
</body>
</html>


