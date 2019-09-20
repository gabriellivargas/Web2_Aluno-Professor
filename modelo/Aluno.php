<?php
	require_once 'Pessoa.php';
	
	class Aluno extends Pessoa{
		private $ra;
		private $siape;
		
		public function setRa($ra){
			$this->ra = $ra;
		}
		
		public function getRa(){
			return $this->ra;
		}

		public function setSiape($sia){
			$this->siape = $sia;
		}
		
		public function getSiape(){
			return $this->siape;
		}
	}
?>