<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Interação de Objetos</title>
    </head>
    <body>
        <?php
        require('./class/InteracaoClasse.class.php');
        require('./class/IntercaoDeObjetos.class.php');
        
        $robson = new InteracaoClasse('Robson V. Leite', 27, 'Programador', 1000);
        $marcos = new InteracaoClasse('Marcos', 22, 'Web Design', 500);
        
        $upinside = new IntercaoDeObjetos('UPINSIDE TECNOLOGIA');
        $upinside->Contratar($robson, 'WebMaster', 3600);
        $upinside->Pagar();
        $upinside->Promover('Gerente de Projetos', 12000);
        $upinside->Pagar();
        //$upinside->Demitir(5600);
        
        
        $upinside->Contratar($marcos, 'Design', 2200);
        $upinside->Pagar();
        $upinside->Pagar();
        $upinside->Promover('Administrador de Projetos');
        
        $upinside->Funcionarios($robson);
        $upinside->Pagar();
        
        var_dump($robson, $marcos, $upinside);
        ?>
    </body>
</html>
