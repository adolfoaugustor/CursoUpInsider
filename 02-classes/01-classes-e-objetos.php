
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './class/ClassesObjeto.class.php';
        
        $teste= new ClassesObjetos();
        $teste->getClass('De introdução', 'Mostra uma classe');
        $teste->verClass();
        
        $teste->Classe = 'Classe 2';
        $teste->Funcao = 'ver função';
        $teste->verClass();
        ?>
    </body>
</html>
