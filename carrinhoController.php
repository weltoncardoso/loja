<?php
class carrinhoController extends controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$dados = array();
		$prods = array();
		if(isset($_SESSION['carrinho'])) {
			$prods = $_SESSION['carrinho'];
		}

		if(count($prods)) {
			$produtos = new produtos();
			$dados['produtos'] = $produtos->get_produtos_by_id($prods);

			$this->loadTemplate("carrinho", $dados);
		} else {
// precisa modificar a raiz ao subir servidor
			header("Location: loja.pc/index.php");
		}
	}

	public function add($id='') {
		if(!empty($id)) {
			if(!isset($_SESSION['carrinho'])) {
				$_SESSION['carrinho'] = array();
			}

			$_SESSION['carrinho'][] = $id;
//alteracao que pode ser desfeita para o serv externo retirar loja.pc/index.php
			header("Location: loja.pc/index.php/carrinho");
		}
	}

	public function del($id) {
		if(!empty($id)) {

			foreach($_SESSION['carrinho'] as $cchave => $cvalor) {
				if($id == $cvalor) {
					unset($_SESSION['carrinho'][$cchave]);
				}
			}
//alteracao que pode ser desfeita para o serv externo retirar loja.pc/index.php
			header("Location: loja.pc/index.php/carrinho");
		}
	}

	public function finalizar() {
		$dados = array(
			'pagamentos' => array(),
			'total' => 0,
			'erro' => ''
		);

		$p = new pagamentos();
		$dados['pagamentos'] = $p->getPagamentos();

		$prods = array();
		if(isset($_SESSION['carrinho'])) {
			$prods = $_SESSION['carrinho'];
		}

		if(count($prods)) {
			$produtos = new produtos();
			$dados['produtos'] = $produtos->get_produtos_by_id($prods);

			foreach($dados['produtos'] as $prod) {
				$dados['total'] += $prod['preco'];
			}
		}

		if(isset($_POST['nome']) && !empty($_POST['nome'])) {

			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);

			$endereco = addslashes($_POST['endereco']);

			if(isset($_POST['pg'])) {
				$pg = $_POST['pg'];
			} else {
				$pg = '';
			}

			if(!empty($email) && !empty($senha) && !empty($endereco) && !empty($pg)) {

				$uid = 0;

				$u = new usuario();
				if($u->isExiste($email)) {
					if($u->isExiste($email, $senha)) {
						$uid = $u->getId($email);
					} else {
						$dados['erro'] = "Usuário e/ou senha errados!";
					}
				} else {
					$uid = $u->criar($nome, $email, $senha);
				}

				if($uid > 0) {

					$subtotal = 0;

					$prods = array();
					if(isset($_SESSION['carrinho'])) {
						$prods = $_SESSION['carrinho'];
					}

					if(count($prods)) {
						$produtos = new produtos();
						$prods = $produtos->get_produtos_by_id($prods);

						foreach($prods as $prod) {
							$subtotal += $prod['preco'];
						}
					}

					$v = new vendas();
					$link = $v->setVenda($uid, $endereco, $subtotal, $pg, $prods);

					header("Location: ".$link);

				}
			} else {
				$dados['erro'] = "Preencha todos os campos!";
			}

		}

		$this->loadTemplate("finalizar_compra", $dados);
	}

	public function obrigado() {
		$dados = array();

		$this->loadTemplate("obrigado", $dados);

	}

}
?>