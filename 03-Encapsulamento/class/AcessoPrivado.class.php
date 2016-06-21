<?php

    class AcessoPrivado {
        private $Nome;
        private $Email;
        private $CPF;

        function __construct($Nome, $Email, $CPF)
        {
            $this->setNome($Nome);
            $this->setEmail($Email);
            $this->setCpf($CPF);
        }

        public function setNome($Nome){
            if($Nome && is_string($Nome)):
                $this->Nome = $Nome;
            else:
                die('Erro no Nome');
            endif;
        }

        public function setEmail($Email){
            if(filter_var($Email, FILTER_VALIDATE_EMAIL)):
                $this->Email = $Email;
            else:
                die('Erro no Email!');
            endif;
        }

        public function setCpf($Cpf){
            if(preg_match('/[0-9]*/i', $Cpf) && strlen($Cpf) == 11):
                $this->CPF = $Cpf;
            else:
                die('Erro no CPF!');
            endif;
        }
    }