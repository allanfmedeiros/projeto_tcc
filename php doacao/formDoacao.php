<?php
include('conexao.php');
include("menuAdministrador.php");
?>


<h1> Doação </h1>

<fieldset>
	<table cellspacing="10">
	<form action="cadastraDoacao.php" method="POST">

		
		
			<tr>
				
				<td><input type="text" class="form-control" name="nomeDoacao" placeholder="Nome Completo"></td>
				<td><input type="text" class="form-control" name="emailDoacao" placeholder="Email"></td>
				
			</tr>
			
			<tr>
				<td><input type="text" class="form-control" name="telCliente" placeholder="Telefone (xx)xxxx-xxxx"></td>
				<td><input type="text" class="form-control" name="bairroCliente" placeholder="Bairro"></td>
				
			</tr>
			
			<tr>
				<td><input type="text" class="form-control" name="telCliente" placeholder="Telefone (xx)xxxx-xxxx"></td>
				<td><input type="text" class="form-control" name="emailCliente" placeholder="Email"></td>
			</tr>
			
			
			
			
		
		<tr>
		
		<td><input type="submit" class="btn btn-primary" value="Cadastrar"> 
		
		<input type="reset" class="btn btn-primary" value="Limpar Campos"></td>
		
		</tr>
		
		
	
		</form>
		</table>
</fieldset>