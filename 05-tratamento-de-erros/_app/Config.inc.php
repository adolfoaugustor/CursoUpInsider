<?php
// CONFIGURAÇÕES DO SITE ##########
// AUTO LOAD DE CLASSES  ##########
function __autoload($Class) {
    $dirName = 'class';

    if(file_exists("{$dirName}/{$Class}.class.php")):
        require_once("{$dirName}/{$Class}.class.php");
    else:
        die("Erro ao incluir O ARQUIVO {$dirName}/{$Class}.class.php<hr>");
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



