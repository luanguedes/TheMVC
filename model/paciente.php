<?php  
	class Clientes{
		private $dados = array(
			1 => @$_POST['nome']; 
			2 => @$_POST['sexo'];
	   		2 => @$_POST['data_nascimento'];
	   		3 => @$_POST['cns'];
	   		4 => @$_POST['nome_mae'];
	   		5 => @$_POST['endereco'];
	   		6 => @$_POST['telefone'];
	   		7 => @$_POST['status'];
   		);

   		public funcion todos(){
   			$data = $this->dados;
   			return $data;
   		}

   		public function ver(){
   			$data{'registro'} = $this->dados[$_GET['id']];
   			return $data;
   		}
	}
?>