<?php

/**
 * <b>DocumentacaoDeClasse:</b>
 * Essa classe foi criada para mostrar a interação de objetos. Logo depois replicamos ela para ver sobre
 * a documentação de classes com PHPDoc.
 * 
 * @copyright (c) 2013, Robson V. Leite UPINSIDE TECNOLOGIA
 */

class DocumentacaoDeClasse {

    /** @var string Nome da empresa */
    public $Empresa;
    /** 
     * Esse atributo é auto gerido pela classe e incrementa o número de funcionário!
     * @var int Número de funcionários 
     */
    public $Setores;
    
    /** @var InteracaoClasse Objeto vindo da classe InteracaoClasse */
    public $Funcionario;
    
    //Constrói a classe requisitando o nome da empresa
    function __construct($Empresa) {
        $this->Empresa = $Empresa;
        $this->Setores = 0;
    }
    
    /**
     * <b>Contratar Funcionário:</b> Informe um objeto da classe InteracaoClasse, o cargo e o salário do
     * funcionário a ser contratado!
     * @param object $Funcionario = Objeto da classe InteracaoClasse
     * @param string $Cargo = Profissão ou cargo a ocupar
     * @param float $Salario = Salário do funcionário
     */
    public function Contratar($Funcionario, $Cargo, $Salario) {
        $this->Funcionario = (object) $Funcionario;
        $this->Funcionario->Trabalhar($this->Empresa, $Salario, $Cargo);
        $this->Setores += 1;
    }
    
    /**
     * <b>Pagar e obter salário:</b> Ao executar esse método o salário do funcionário será pago. Você ainda
     * podera dar um echo neste mesmo para visualizar o salário!
     * @return float Retorna o salário do contratado!
     */
    public function Pagar() {
        $this->Funcionario->Recer($this->Funcionario->Salario);
        return $this->Funcionario->Salario;
    }
    
    public function Promover($Cargo, $Salario = null) {
        $this->Funcionario->Profissao = $Cargo;
        if($Salario):
            $this->Funcionario->Salario = $Salario;
        endif;
    }
    
    public function Funcionarios($Funcionario) {
        $this->Funcionario = (object) $Funcionario;
    }
    
    public function Demitir($Recisao) {
        $this->Funcionario->Recer($Recisao);
        $this->Funcionario->Empresa = null;
        $this->Funcionario->Salario = null;
        $this->Setores -= 1;
    }


}
