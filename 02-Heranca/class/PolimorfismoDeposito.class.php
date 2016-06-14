<?php
/**
 * PolimorfismoDeposito [TIPO]
 * Descrição
 * polimorfismo depósito extends de polimorfismo
 */

class PolimorfismoDeposito extends Polimorfismo {
    
    public $Desconto;
            
    function __construct($Produto, $Valor) {
        parent::__construct($Produto, $Valor);
        $this->Desconto = 15;
        $this->Metodo = 'Deposito';
    }
    function setDesconto($Desconto) {
        $this->Desconto = $Desconto;
    }
    public function Pagar() {
        $this->Valor = ($this->Valor / 100) * 100 - $this->Desconto;
        parent::Pagar();
    }

}
