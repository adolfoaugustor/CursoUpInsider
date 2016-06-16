<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 18</title>
    </head>
    <body> 
        <?php
        require('./inc/Config.inc.php');
        
        $produto = new ResolucaoDeEscopo('Livro de PHP', 59.90);
        $digital = new ResolucaoDeEscopoDigital('Livro de PHP', 39.90);
        $produto->Vender();
        $produto->Vender();
        $produto->Vender();

        $digital->Vender();
        $digital->Vender();

        //$produto->Relatorio();
        //ou no metodo php 5, ex:
        ResolucaoDeEscopo::Relatorio();
        //Acessando o atributo statico da classe:
        //echo "O livro  de PHP vendeu " . ResolucaoDeEscopo::$Vendas;
        echo ResolucaoDeEscopoDigital::$Digital . " Livros digitais <br>";
        echo ResolucaoDeEscopo::$Vendas - ResolucaoDeEscopoDigital::$Digital . ' Livros Impressos';


        echo "<pre>";
        var_dump($produto, $digital);
        echo "<pre>";
        ?>
    </body>
</html>
