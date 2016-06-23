<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>PHP - Tipos de validação</title>
    </head>
    <body>

    <h3>Tratamento por exixstência: </h3>
    <hr>
    <?php
    $string = 'contato';
    $string = 3;
    $string = '';

        if(is_string($string)):
            echo "String é uma string!";
        elseif(!is_string($string)):
            echo "String não é uma string";
        endif;

    echo "<hr><br>";

        if(!empty($string)):
            echo "String existe e tem valor";
        elseif(isset($string)):
            echo "String existe mas está em branco";
        endif;
    ?>
    <h3>Tomada de decisão: </h3>
    <hr>

    <?php
        $decisao = 'augusto@gmail.com';

    if(!filter_var($decisao, FILTER_VALIDATE_EMAIL)):
        echo "E-mail informado é inválido";
    elseif($decisao == 'adolfoaugustor@gmail.com'):
        die('Esse e-mail é restrito');
    else:
        echo "E-mail válido";
    endif;

    echo ":-)";

    ?>
    <h3>Retorno de FLAGS</h3>
    <hr>

    <?php

    function Idade($Idade = null){
        if(!$Idade):
            return false;
        elseif(!is_int($Idade)):
            return false;
        endif;
        return "VocÊ nasceu em: " . ( date('Y') - $Idade );
    }
    //$Idade = 'abs';
    $Idade = 15;

    if(Idade($Idade)):
        echo Idade($Idade);
    else:
        echo "Erro informe um INT idade";
    endif;

    ?>
    <h3>Validação de comparação</h3>
    <hr>
    <?php
    $um = 10;
    $dois = '10';

    if($um == $dois):
        echo "Um tem o mesmo valor que dois.. ";
    elseif($um != $dois):
        echo "Um e dois tem valor diferente; ";
    endif;

    echo"<hr>";

    if($um === $dois):
        echo "Um e dois tem o mesmo e valor e são do mesmo tipo; ";
    elseif($um !== $dois):
        echo "Um e dois tem valor ou tipo diferente; ";
    endif;

    ?>











    </body>
</html>
