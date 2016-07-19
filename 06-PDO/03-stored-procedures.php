<!DOCTYPE html>
<html lang="pt-br">
<head>
            <meta charset="UTF-8">
            <title>Aulas tutoriais</title>
        </head>
        <body>
        <?php
        require('./_app/Config.inc.php');
        $Conn = new Conn();

        try{
            $Query = "SELECT * FROM ws_siteviews_agent WHERE agent_name= :name";
            $Exe = $Conn->getConn()->prepare($Query);

            $Exe->bindValue(":name", 'Chrome');
            $Exe->execute();

            $Chrome = $Exe->fetchAll(PDO::FETCH_ASSOC);
            //exemplo 2
            $Exe->bindValue(":name", 'Safari');
            $Exe->execute();

            $Safari = $Exe->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e){
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
        }
        if($Chrome):
            echo "<pre>";
            var_dump($Chrome);
            echo "</pre>";
            echo "{$Chrome[0]['agent_name']} tem {$Chrome[0]['agent_views']} visita(s)<hr>";
        endif;

        if($Safari):
            echo "<pre>";
            var_dump($Safari);
            echo "</pre>";
            echo "{$Safari['agent_name']} tem {$Safari['agent_views']} visita(s)<hr>";
        endif;
        ?>
</body>
</html>
