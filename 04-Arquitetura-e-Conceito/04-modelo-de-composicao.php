<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Aulas tutoriais</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');

        $sora = new ComposicaoUsuario('Soraya','so@gmail.com');
        $sora->CadastrarEndereco('Fortaleza', 'CE');

        echo "O E-mail de {$sora->Nome} é {$sora->Email}<br>";
        echo "{$sora->Nome} mora em  {$sora->getEndereco()->getCidade()}/{$sora->getEndereco()->getEstado()}<br>";

        echo "<pre>";
        var_dump($sora);
        echo "<pre>";
        ?>
</body>
</html>
