<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Generic Crud :: Read</title>
    </head>
    <body>
        <?php
        require('./_app/Config.inc.php');
        //ws_siteviews_agent

        $read = new Read;
        $read->ExeRead('ws_siteviews_agent', 'WHERE agent_name = :name AND agent_views >= :views LIMIT :limit', "name=firefox&views=10&limit=2");
        $read->setPlaces("name=Chrome&views=10&limit=2");
        $read->setPlaces("name=IE&views=5&limit=2");

        if ($read->getRowCount() >= 1):
            var_dump($read->getResult());
            echo '<hr>';
        endif;
        
        $read->FullRead("SELECT * FROM ws_siteviews_agent LIMIT :limit OFFSET :offset", "limit=1000&offset=2");

        var_dump($read);
        ?>
    </body>
</html>
