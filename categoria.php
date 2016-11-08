
<link rel="stylesheet" href="/loja.pc/assets/css/template.css" />
	<script type="text/javascript" src="/loja.pc/assets/js/slide.js"></script>
<h1><?php echo utf8_encode($categoria); ?></h1>

<div class="conteinerint">
		<div class="leftside">
			<div class="slideshow" id="slideshow">
			<div class="slidebolina">
				<div class="bolinha" onclick="mudarSlidde(0)"></div>
				<div class="bolinha" onclick="mudarSlidde(1)"></div>
				<div class="bolinha" onclick="mudarSlidde(2)"></div>
				<div class="bolinha" onclick="mudarSlidde(3)"></div>
				<div class="bolinha" onclick="mudarSlidde(4)"></div>
				<div class="bolinha" onclick="mudarSlidde(5)"></div>
			</div>
				<div class="slideshowarea">
				<a href="/loja.pc/index.php/categoria/ver/4">
					<div class="slide">
					 <img src="/loja.pc/assets/images/prods/mk_inst_home_hero_banner_fragrancias.png"/>
					</div>
					</a>
				    <a href="/loja.pc/index.php/categoria/ver/1">
					<div class="slide">
					 <img src="/loja.pc/assets/images/prods/mk_inst_lancamentos_hero_banner_mini_pinceis.png"/>
					</div>
					</a>
				    <a href="/loja.pc/index.php/categoria/ver/3">
					<div class="slide">
					 <img src="/loja.pc/assets/images/prods/mk_inst_home_hero_banner_mattissimo.png"/>
					</div>
					</a>
				    <a href="/loja.pc/index.php/categoria/ver/5">
					<div class="slide">
					 <img src="/loja.pc/assets/images/prods/mk_inst_home_hero_banner_solar.png"/>
					</div>
					</a>
				    <a href="/loja.pc/index.php/categoria/ver/2">
					<div class="slide">
					 <img src="/loja.pc/assets/images/prods/cuidados.png"/>
					</div>
					</a>
				    <a href="/loja.pc/index.php/categoria/ver/6">
					<div class="slide">
					 <img src="/loja.pc/assets/images/prods/mk_inst_homens_hero_banner_kitnatal.jpg"/>
					</div>
					</a>
				</div>
				</div>
				</div>
				</div>

<div style="clear:both"></div>

<?php foreach($produtos as $produto): ?>
<a href="<?php echo BASE_URL; ?>/produto/ver/<?php echo $produto['id']; ?>">
	<div class="produto">
		<img src="/loja.pc/assets/images/prods/<?php echo $produto['imagem']; ?>" width="176" height="176" border="0" />
		<strong><?php echo $produto['nome']; ?></strong><br/>
		<?php echo 'R$ '.$produto['preco']; ?>
	</div>
</a>
<?php endforeach; ?>
<div style="clear:both"></div>