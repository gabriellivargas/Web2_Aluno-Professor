<?php
	abstract class Pessoa{
		private $nome;
		private $idade;
		private $cpf;
		private $sexo;
		
		public function setNome($no){
			$this->nome = $no;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setIdade($ida){
			$this->idade = $ida;
		}
		
		public function getIdade(){
			return $this->idade;
		}

		public function setCpf($cp){
			$this->cpf = $cp;
		}
		
		public function getCpf(){
			return $this->cpf;
		}

		public function setSexo($se){
			$this->sexo = $se;
		}
		
		public function getSexo(){
			return $this->sexo;
		}
	}
?>