<?php

function __autoload($Class) {
    $dirName = 'class';
    
    if(file_exists("{$dirName}/{$Class}.class.php")):
        require_once("{$dirName}/{$Class}.class.php");
    else:
        die("Erro ao incluir O ARQUIVO {$dirName}/{$Class}.class.php<hr>");
    endif;
}
