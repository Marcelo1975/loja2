<h1>Checkout Mercado Pago</h1>
<?php if(!empty($error)): ?>
	<div class="warn">
		<?php echo $error; ?>
	</div>
<?php endif; ?>

<h3>Dados Pessoais</h3>

<form method="POST">
	<strong>Nome:</strong><br/>
	<input type="text" name="name" value="Marcelo Alexandre" /><br/><br/>

	<strong>CPF:</strong><br/>
	<input type="text" name="cpf" value="05027037686" /><br/><br/>

	<strong>Telefone:</strong><br/>
	<input type="text" name="telefone" value="3799999999" /><br/><br/>

	<strong>E-mail:</strong><br/>
	<input type="email" name="email" value="cecel.alex@gmail.com" /><br/><br/>

	<strong>Senha:</strong><br/>
	<input type="password" name="pass" value="123" /><br/><br/>

	<h3>Informações de Endereço</h3>

	<strong>CEP:</strong><br/>
	<input type="text" name="cep" value="35530000" /><br/><br/>

	<strong>Rua:</strong><br/>
	<input type="text" name="rua" value="Rua São josé" /><br/><br/>

	<strong>Número:</strong><br/>
	<input type="text" name="numero" value="919" /><br/><br/>

	<strong>Complemento:</strong><br/>
	<input type="text" name="complemento" value="Mercearia do edvar" /><br/><br/>

	<strong>Bairro:</strong><br/>
	<input type="text" name="bairro" value="São Geraldo" /><br/><br/>

	<strong>Cidade:</strong><br/>
	<input type="text" name="cidade" value="Cláudio" /><br/><br/>

	<strong>Estado:</strong><br/>
	<input type="text" name="estado" value="MG" /><br/><br/>

	<input type="submit" value="Efetuar Compra" class="button efetuarCompra" />
</form>


