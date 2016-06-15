<?php 

class TrabalhoInterfaces implements IAluno{
	public $Aluno;
	public $Curso;
	public $Formacao;

	function __construct($Aluno, $Curso){
		$this->Aluno = $Aluno;
		$this->Curso = $Curso;
		$this->Formacao = arry();
	}

	public function Matricular($Curso){
		$this->Curso = $Curso;
		echo "{$this->Aluno} foi matriculado no curso {$this->Curso}<br>";
	}

	public function Formar(){
		$this->Formacao[] = $this->Curso;
		echo "{$this->Aluno} Formou-se no curso {$this->Curso}<br>";
	}
}