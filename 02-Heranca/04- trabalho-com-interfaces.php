<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 18</title>
    </head>
    <body> 
        <?php
        include '/interface/IAluno.php';
        //require('./interface/IAluno.php');
        require('./inc/Config.inc.php');
        
        $aluno = new TrabalhoInterfaces('Adolfo Augusto', 'ADS');
        $aluno->Formar();
        $aluno->Matricular('WS PHP');
        $aluno->Formar();

        echo '<pre>';
        var_dump($aluno);
        echo '</pre>';
        ?>
    </body>
</html>
