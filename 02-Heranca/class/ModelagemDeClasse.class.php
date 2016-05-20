<?php

/**
 * ModelagemDeClasse.class.php [TIPO]
 * Descrição
 */
class ModelagemDeClasse {
    public $Nome, $Idade, $Profissao, $ContaSalario;
    
    function __construct($Nome, $Idade, $Profissao, $ContaSalario) {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profissao = $Profissao;
        $this->ContaSalario = $ContaSalario;
    }
    public function Trabalhar($Trabalho, $Valor) {
        $this->ContaSalario += $Valor;
        $this->DarEcho("{$this->Nome} Desenvolveu um {$Trabalho} e recebeu {$this->ToReal($Valor)}");
    }
    public function setNome($Nome) {
        $this->Nome = $Nome;        
    }
    public function setIdade($Idade) {
        $this->Idade = $Idade;        
    }
    public function setProfissao($Profissao) {
        $this->Prosissao = $Profissao;        
    }
    public function setContaSalario($ContaSalario) {
        $this->ContaSalario = $ContaSalario;        
    }
    public function ToReal($Valor) {
        return number_format($Valor, '2', '.', ',');
    }
    public function DarEcho($Mensagem) {
        echo "<p>{$Mensagem}</p>";
    }
}
