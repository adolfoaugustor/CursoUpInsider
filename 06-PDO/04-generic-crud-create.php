<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Generic Crud :: Create</title>
    </head>
    <body>
        <?php
        require('./_app/Config.inc.php');
        
        $Dados = ['agent_name' => 'Firefox', 'agent_views' => '1200'];
        
        $Cadastra = new Create;
        //$Cadastra->ExeCreate('ws_siteviews_agent', $Dados);
        
        $Dados = ['agent_name' => 'Safari', 'agent_views' => '680'];
        $Cadastra->ExeCreate('ws_siteviews_agent', $Dados);
        
        if($Cadastra->getResult()):
            echo "Cadastro com sucesso!<hr>";
        endif;

        echo "<pre>";
        var_dump($Cadastra);
        echo "</pre><hr>";

        ?>
    </body>
</html>
