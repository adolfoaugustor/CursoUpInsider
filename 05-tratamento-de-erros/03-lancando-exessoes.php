<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Aulas tutoriais</title>
    </head>
    <body>
        <?php
        $eu = null;
        if(!$eu):
            $a = new Exception("EU é null", E_USER_NOTICE);
        endif;

        echo $a->getMessage();
        echo "<pre>";
        var_dump($a);
        echo "<pre>";
        echo "<hr>";

        try{
            if(!$eu):
                throw new Exception("Eu novamente está NULL. ", E_USER_NOTICE);
            endif;

        }catch (Exception $e){
            echo "<p>Erro # {$e->getCode()}: {$e->getMessage()}<br>";
            echo "<small>{$e->getFile()} </small></p>";
        }
        //echo "<hr>";
        //echo $e->xdebug_message;

        ?>
</body>
</html>
