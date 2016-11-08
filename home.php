		<link rel="stylesheet" href="/loja.pc/assets/css/template.css" />

		<div class="widget_conteudo">
		<div class="widget_titulo">
		<strong>Encontre-nos no Facebook </strong>
		</div>
		</br>
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMilla-And-Mary-Kay-211012165994158%2F%3Ffref%3Dts&tabs=timeline&width=250&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="250" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>

<?php foreach($produtos as $produto): ?>
	<meta charset="utf-8">
<a href="<?php echo BASE_URL; ?>/produto/ver/<?php echo $produto['id']; ?>">
	<div class="produto">
		<img src="/loja.pc/assets/images/prods/<?php echo $produto['imagem']; ?>" width="176" height="176" border="0" />
		<strong><?php echo utf8_encode($produto['nome']); ?></strong><br/>
		<?php echo 'R$ '.$produto['preco']; ?>
	</div>
</a>
<?php endforeach; ?>
<div style="clear:both"></div>