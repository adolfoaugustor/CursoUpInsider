<?php

// CONFIGURAÇÕES DO SITE ##########
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBSA','wsphp');

// AUTO LOAD DE CLASSES  ##########

function __autoload($Class) {

    $cDir = ['Conn'];
    $iDir = null;

    foreach ($cDir as $dirName):
        if (!$iDir && file_exists(__DIR__ . "\\{$dirName}\\{$Class}.class.php") && !is_dir(__DIR__ . "\\{$dirName}\\{$Class}.class.php")):
            include_once (__DIR__ . "\\{$dirName}\\{$Class}.class.php");
            $iDir = true;
        endif;
    endforeach;

    if (!$iDir):
        trigger_error("Não foi possível incluir {$Class}.class.php", E_USER_ERROR);
        die;
    endif;
}
// TRATAMENTO DE ERROS  ##########
// CSS constantes:: Mensagens de Erro
define('AD_ACCEPT','accept');
define('AD_INFOR','infor');
define('AD_ALERT','alert');
define('AD_ERROR','error');

// AD Erro :: Exibe erros lançados :: Front
function ADErro($ErrMsg, $ErrNo, $ErrDie = null){
    $CssClass = ($ErrMsg == E_USER_NOTICE ? AD_INFOR : ($ErrNo == E_USER_WARNING ? AD_ALERT : ($ErrNo ==E_USER_ERROR ? AD_ERROR : $ErrNo) ) );
    echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}<span class=\"ajax_close\"></span></p>";

    if($ErrDie):
        die;
    endif;
}


// AD Erro :: Exibe erros lançados :: Front
function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine){
    $CssClass = ($ErrMsg == E_USER_NOTICE ? AD_INFOR : ($ErrNo == E_USER_WARNING ? AD_ALERT : ($ErrNo == E_USER_ERROR ? AD_ERROR : $ErrNo) ) );
    echo "<p class=\"trigger {$CssClass}\">";
    echo "<b> Erro na linha: #{$ErrLine} ::</b> {$ErrMsg}<br>";
    echo "<small>{$ErrFile}</small>";

    echo "<span class=\"ajax_close\"></span></p>";

    if($ErrNo == E_USER_ERROR):
        die;
    endif;
}
set_error_handler('PHPErro');



