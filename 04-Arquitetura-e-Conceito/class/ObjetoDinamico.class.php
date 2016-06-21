<?php

class ObjetoDinamico{
    public $Nome;
    private $Email;

    public function Novo($Cliente){
        if (is_object($Cliente)):
            $this->Nome = $Cliente->Nome;
            $this->Email = $Cliente->Email;
        else:
            die('Error, informe um objeto com nome e-mail! ');
        endif;
    }
}