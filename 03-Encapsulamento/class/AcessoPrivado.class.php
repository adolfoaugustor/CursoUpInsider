<?php

    class AcessoPrivado {
        private $Nome;
        private $Email;
        private $CPF;

        function __construct($Nome, $Email, $CPF)
        {
            $this->Nome = $Nome;
            $this->Email = $Email;
            $this->CPF = $CPF;
        }

        public function setNome(){

        }
    }