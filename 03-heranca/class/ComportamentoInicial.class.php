<?php
/**
 * ComportamentoInicial.class.php [TIPO]
 * Descrição
 */
class ComportamentoInicial{
    var $Nome;
    var $Idade;
    var $Profissao;
    var $Salario;
    
    function __construct($Nome, $Idade, $Profissao, $Salario){
        $this->Nome = (String)$Nome;
        $this->Idade = (Int)$Idade;
        $this->Profissao = (String)$Profissao;
        $this->Salario = (Int)$Salario;
        echo "O objeto {$this->Nome} foi destruido. <hr>";
    }
    function __destruct() {
        echo "O objeto {$this->Nome} foi destruido. <hr>";
    }
    
    function Ver(){
        echo "<pre>";
        print_r($this);
        echo "<pre>";
    }
    
}
