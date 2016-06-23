<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>Aulas tutoriais</title>
    <link rel="stylesheet" href="css/reset.css">
</head>
    <body>
        <?php
        require('./_app/Config.inc.php');

        trigger_error("Essa é uma NOTICE. ", E_USER_NOTICE);
        trigger_error("Essa é uma ALERT. ", E_USER_WARNING);
        //trigger_error("Essa é uma ERROR. ", E_USER_ERROR);

        PHPErro(AD_ERROR, "Esse é um erro PERSONALIZADO", __FILE__, __FILE__);
        ADErro("Esse é um accept", AD_ACCEPT);

        try{
            throw new Exception("Essa é uma EXESSÃO", E_USER_WARNING);
        }catch(Exception $e){
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine() );
        }

        ?>
</body>
</html>
