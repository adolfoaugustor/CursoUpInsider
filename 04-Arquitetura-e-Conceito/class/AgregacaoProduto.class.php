<?php
    class AgregacaoProduto{
        private $Produto;
        private $Nome;
        private $Valor;

        function __construct($Produto, $Nome, $Valor)
        {
            $this->Produto = $Produto;
            $this->Nome = $Nome;
            $this->Valor = $Valor;
        }


    }