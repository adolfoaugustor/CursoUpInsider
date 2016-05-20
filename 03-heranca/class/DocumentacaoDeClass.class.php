<?php
/**
 * <b>Documentação de Classe</b>
 * Descrição
 * Essa classe foi criada para mostrar a interação de objetos. Logo depois replicamos ela para ver
 * sobre a documentação de classes do PHPDOC.
 */

class DocumentacaoDeClass {
    /** @var nome da empresa */
    public $Empresa;
    /** @var nome do setor */
    public $Setores;
    
//    var interação de classe
    public $Funcionario;
    
    /**
     * 
     * @param type $Empresa
     */
    function __construct($Empresa) {
        $this->Empresa = $Empresa;
        $this->Setores = 0;
    }
    /**
     * 
     * @param type $Funcionario
     * @param type $Cargo
     * @param type $Salario
     */
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
