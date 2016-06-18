<?php
/**
 * Created by IntelliJ IDEA.
 * User: swr2d2
 * Date: 16/06/2016
 * Time: 16:43
 */

class AcessoProtegido {
    public  $Nome;

    function __construct($Nome, $Email){
        $this->Nome = $Nome;
        $this->setEmail($Email);
    }

    public function setEmail($Email){
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)):
            die('Email inválido!');
        else:
            $this->Email = $Email;
        endif;
    }

    protected function setNome($Nome){
        $this->Nome = $Nome;
    }
}

class AcessoProtegidoFilha extends AcessoProtegido
{
    protected $CPF;

    public function addCpf($Nome, $Cpf){
        parent::setNome($Nome);
        $this->CPF = $Cpf;
    }
}