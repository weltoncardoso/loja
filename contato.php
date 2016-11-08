<h1>Contato</h1>

<form method="POST" class="contato">

	<?php if(!empty($msg)): ?>
	<div class="aviso"><?php echo $msg; ?></div>
	<?php endif; ?>

	Nome:<br/>
	<input type="text" name="nome" required /><br/><br/>

	E-mail:<br/>
	<input type="email" name="email" required /><br/><br/>

	Mensagem:<br/>
	<textarea name="mensagem"></textarea><br/><br/>

	<input type="submit" value="Enviar Mensagem" />

</form>
<div class="dados">
</br></br>
<img src="/loja.pc/assets/images/logo.png" width="300" height="200" border="0" />
</br>
	<strong>
	 Camila B. Araujo </strong> </br>
	 Consultora indepedente MARY KAY </br>
     E-mail: </br>
     facebook: </br>
     Brasilia DF
	
</div>

<div style="clear:both"></div>