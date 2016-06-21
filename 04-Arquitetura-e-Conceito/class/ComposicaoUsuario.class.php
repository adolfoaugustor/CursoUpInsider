<?php
    class ComposicaoUsuario{
        public $Nome;
        public $Email;
        private $Endereco;

        function __construct($Nome, $Email)
        {
            $this->Nome = $Nome;
            $this->Email = $Email;
        }

        public function CadastrarEndereco($Cidade, $Estado){
            $this->Endereco = new ComposicaoEndereco($Cidade, $Estado);
        }

        public function getEndereco()
        {
            return $this->Endereco;
        }


    }