<?php
	class Controller{
		private $view;
		private $model;

		public function __construct(){
			$this->view = new View;
			$this->model = new $_GET['modulo'];
			$data = this->model->$_GET['acao']();
			$this->view->load($_GET['modulo'], $_GET{'acao'}, $data);
		}  
	}
?>