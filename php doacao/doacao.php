<?php
include('conexao.php');
include("menuAdministrador.php");
?>

<h1> Doação </h1>

<fieldset>
	<table cellspacing="10">
	<form action="cadastraDoacao.php" method="POST">

		
		
			<tr>
				
				<td><input type="text" class="form-control" name="nomeCliente" placeholder="Nome"></td>
				<td><input type="text" class="form-control" name="sobrenomeCliente" placeholder="Sobrenome"></td>
				<td><input type="number" class="form-control" name="cpfCliente" placeholder="CPF"></td>
			</tr>
			
			<tr>
				<td><input type="number" class="form-control" name="ruaCliente" placeholder="Rua"></td>
				<td><input type="number" class="form-control" name="bairroCliente" placeholder="Bairro"></td>
				<td><input type="number" class="form-control" name="numeroCliente" placeholder="Número"></td>
			</tr>
			
			<tr>
				<td><input type="text" class="form-control" name="telCliente" placeholder="Telefone (xx)xxxx-xxxx"></td>
				<td><input type="text" class="form-control" name="celCliente" placeholder="Celular (xx)xxxx-xxxx"></td>
				<td><input type="text" class="form-control" name="emailCliente" placeholder="Email"></td>
			</tr>
			
			<tr>
				<td><input type="text" class="form-control" name="userCliente" placeholder="Nome de usuário"></td>
				<td><input type="password" class="form-control" name="senhaCliente" placeholder="Crie uma senha"></td>
				<td><input type="password" class="form-control" name="repeteSenhaCliente" placeholder="Repita a senha"></td>
			</tr>
			
			
		
		<tr>
		
		<td><input type="submit" class="btn btn-primary" value="Cadastrar"> 
		
		<input type="reset" class="btn btn-primary" value="Limpar Campos"></td>
		
		</tr>
		
		
	
		</form>
		</table>
</fieldset>