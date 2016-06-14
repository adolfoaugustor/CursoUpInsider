<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aulas tutoriais</title>
    </head>
    <body> 
        <?php
        require('./inc/Config.inc.php');
        $pessoa = new Heranca('Adolfo Augusto R.', 26);
        $pessoa->Formar('ADS');
        $pessoa->Envelhecer();
        $pessoa->Formar('Zend2');
        $pessoa->VerPessoa();
        
        echo '<pre>';
        print_r($pessoa);
        echo '</pre>';
        echo '<hr>';
        
        $pessoaME = new HerancaJuridica('Adolfo Augusto R.', 26, 'CosmosWeb');
        $pessoaME->Formar('ADS');
        $pessoaME->Envelhecer();
        $pessoaME->Formar('Zend2');
        $pessoaME->VerPessoa();
        
        $pessoaME->Contratar('Marcos');
        $pessoaME->Contratar('Elisa');
        $pessoaME->VerEmpresa();
        
        echo '<pre>';
        print_r($pessoa);
        echo '</pre>';
        ?>
    </body>
</html>
