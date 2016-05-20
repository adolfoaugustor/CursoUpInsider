<?php


/**
 * InteracaoDeObjetos.class [TIPO]
 * Descrição
 */
class InteracaoDeObjetos {
    public $Empresa;
    public $Setores;
    
//    var interação de classe
    public $Funcionario;
    
    function __construct($Empresa) {
        $this->Empresa = $Empresa;
        $this->Setores = 0;
    }
    public function Contratar($Funcionario, $Cargo, $Salario) {
        $this->Funcionario = (Object)$Funcionario;
        $this->Funcionario->Trabalhar($this->Empresa, $Salario, $Cargo);
        $this->Setores += 1;        
    }
    public function Pagar() {
        $this->Funcionario->Recer($this->Funcionario->Salario);
    }
    public function Promover($Cargo, $Salario = null) {
        $this->Funcionario->Profissao = $Cargo;
        if ($Salario):
            $this->Funcionario->Salario = $Salario;
        endif;
    }
    public function Funcionarios($Funcionario) {
        $this->Funcionario = (Object)$Funcionario;
    }
    public function Demitir($Recisao) {
        $this->Funcionario->Recer($Recisao);
        $this->Funcionario->Empresa = null;
        $this->Funcionario->Salario = null;
        $this->Setores -= 1;
    }
}
