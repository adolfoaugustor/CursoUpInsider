<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP - Prepared Statements</title>
</head>
<body>
<?php
require('./_app/Config.inc.php');
$pdo = new Conn;
$name = 'Firefox';
$views = '128';

try{
    $QRCreate = "INSERT INTO ws_siteviews_agent (agent_name, agent_views) VALUES (?, ?)";
    $Create = $pdo->getConn()->prepare($QRCreate);

//    $Create->bindValue(1, 'IE', PDO::PARAM_STR);
//    $Create->bindValue(2, '8', PDO::PARAM_INT);

    $Create->bindParam(1, $name, PDO::PARAM_STR, 15);
    $Create->bindParam(2, $views, PDO::PARAM_INT, 15);


    //$Create->execute();

    if($Create->rowCount()):
        echo "{$pdo->getConn()->lastInsertId()} - Cadastro com sucesso.";
    endif;

    $QrSelect = "SELECT * FROM ws_siteviews_agent WHERE agent_views >= :visitas";
    $Select = $pdo->getConn()->prepare($QrSelect);

    $Select->bindValue(':visitas', '7');

    $Select->execute();

    if($Select->rowCount() >=1):
        echo "Pesquisa retornou {$Select->rowCount()} resultados(s)<hr>";
        $resultado = $Select->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        var_dump($resultado);
        echo "<pre>";
    else:
        echo "Nada ainda!<hr>";
    endif;

} catch (PDOException $e){
    PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
}

?>
</body>
</html>
