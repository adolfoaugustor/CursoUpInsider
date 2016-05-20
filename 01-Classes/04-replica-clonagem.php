<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require './class/ReplicaClonagem.class.php';
            $readA = new ReplicaClonagem("posts", "categorias = 'noticias'", 'ODER BY data DESC');
            $readA->Ler();
            $readA->setTermos("categoria = 'internet'");
                        
            $readB = clone($readA);
            $readB->setTermos("categorias = 'redes sociais'");
                        
            $readC = clone($readA);
            $readC->setTabela('comentarios');
            $readC->setTermos("post = 25");

            $readB->Ler();
            $readC->Ler();
            $readA->Ler();
            
            echo "<pre>";
            print_r($readA);
            echo "<br><hr>";
            print_r($readB);
            echo "<br><hr>";
            print_r($readC);
            echo "</pre><hr>";
            
            var_dump($readA, $readB, $readC); 
            
        ?>
    </body>
</html>
