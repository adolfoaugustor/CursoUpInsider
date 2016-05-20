<?php

class AtributosMetodos {

    var $Nome;
    var $Idade;
    var $Profissao;

    function setUsuario($Nome, $Idade, $Profissao) {
        $this->Nome = $Nome;
        $this->Profissao = $Profissao;
        $this->setIdade($Idade);
    }

    function getUsuario() {
        return "{$this->Nome} Tem {$this->Idade} anos de idade, Trabalha com {$this->Profissao}.";
    }

    function getClass() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

    function setIdade($Idade) {
        if (!is_int($Idade)):
            die('idade informada é incorreta!');
        else:
            $this->Idade = $Idade;
        endif;
    }
    function Envelhecer(){
        $this->Idade = $this->Idade +1;
    }

}
