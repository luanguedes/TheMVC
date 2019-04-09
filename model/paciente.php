<?php  
	class Clientes{
		private $dados;

   		public function todos(){
   			$data = $this->dados;
   			return $data;
   		}

   		public function ver(){
   			$data{'registro'} = $this->dados[$_GET['id']];
   			return $data;
   		}
	}
?>