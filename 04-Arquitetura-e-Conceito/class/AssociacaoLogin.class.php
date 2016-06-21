<?php
    class AssociacaoLogin{
    private $Cliente;
    private $Login;

        function __construct($Cliente)
        {
            if (is_object($Cliente)):
                $this->Cliente = $Cliente;
                $this->Login = true;
            else:
                die('Error ao logar');
            endif;
        }

        public function getCliente()
        {
            return $this->Cliente;
        }

        public function getLogin()
        {
            return $this->Login;
        }


    }