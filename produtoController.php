<?php
class produtoController extends controller {

	public function __construct() {
		parent::__construct();
	}

	public function ver($id='') {

		if(!empty($id)) {
			$dados = array();
			$id = addslashes($id);

			$produtos = new produtos();
			$dados['produto'] = $produtos->get_produto($id);

			if(is_array($dados['produto']) && count($dados['produto']) > 0) {
				$this->loadTemplate("produto", $dados);
//alteracao que pode ser desfeita para o serv externo retirar loja.pc/index.php				
			} else {
				header("Location: loja.pc/index.php/naoencontrado");
			}
//alteracao que pode ser desfeita para o serv externo retirar loja.pc/index.php
		} else {
			header("Location: loja.pc/index.php/naoencontrado");
		}

	}

}
?>