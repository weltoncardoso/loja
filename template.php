<html>
	<head>
		<title>Nossa Loja</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/loja.pc/assets/css/template.css" />
	</head>
	<body>

		<div class="topo">
		<div class="topoint">
		<div class="topolog">
			<img src="/loja.pc/assets/images/logo.png" width="150" height="100" border="0" />
		</div >
		<div class="topobanner">
		<img src="/loja.pc/assets/images/banner.png" width="650" height="100" border="0" />
		<img src="/loja.pc/assets/images/consultora.png" width="200" height="100" border="0" />
		</div>
		</div>
		</div>
			<div style="clear:both"></div>
		<div class="menu">

		<div class="menuint">
				<ul>
					<a href="/loja.pc"><li><strong>home</li></a>
					<a href="<?php echo BASE_URL; ?>/empresa"><li>empresa</li></a>
					<?php foreach($menu as $menuitem): ?>
					<a href="<?php echo BASE_URL; ?>/categoria/ver/<?php echo $menuitem['id']; ?>"><li><?php echo utf8_encode($menuitem['titulo']); ?></li></a>
					<?php endforeach; ?>
					<a href="<?php echo BASE_URL; ?>/contato"><li>contato</li></a>
					<a href="<?php echo BASE_URL; ?>/pedidos"><li>pedidos</strong></li></a>
				</ul>
				<a href="<?php echo BASE_URL; ?>/carrinho">
					<div class="carrinho">
						Carrinho:<br/>
						(<?php echo (isset($_SESSION['carrinho']))?count($_SESSION['carrinho']):'0'; ?>) itens
					</div>
				</a>
		</div>		
		</div>
		

		
		<div class="container">

			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
		<div style="clear:both"></div>
		<div class="rodape"></div>
		        <div class="fim">
		        <img src="/loja.pc/assets/images/logowa.png" width="50" height="50" border="0" /> </br>
            <strong>Welton Cardoso</strong> 
        </div>
	</body>
</html>