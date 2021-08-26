<?php
include('conexao.php');
include("menuGeral.php");
?>

<link rel="stylesheet" href="css/style.css">

<div class="barra">
<h3 align="left"> Cadastro de Animais </h3>
</div>

<fieldset>
	<table cellspacing="10">
	<form action="cadastraAnimais.php" method="POST">

		
		
		<tr>
			<td><input type="text" class="form-control" name="nomeAnimal" placeholder="Nome do Animal"></td>
			<td><input type="text" class="form-control" name="nomeTutor" placeholder="Nome do Tutor"></td>
			
				
		</tr>
			
		<tr>
			<td>
				<select>
				<option>Cor</option>
				<option>Marrom</option>
				<option>Preto</option>
				<option>Branco</option>
				<option>Mesclado</option>
				</select>
			</td>
			
			<td>
				<select>
				<option>Tipo de pelagem</option>
				<option>Curta</option>
				<option>Média</option>
				<option>Longa</option>
				</select>
			</td>
				
		
			
			<td>
				<select>
				<option>Tipo de Animal</option>
				<option>Cachorro</option>
				<option>Gato</option>
				</select>
				</td>
				
			<td>
				<select>
				<option>Sexo</option>
				<option>Macho</option>
				<option>Fêmea</option>
				</select>
				</td>
		</tr>
		
		<tr>
		<td>
			<input type="text" placeholder="Idade" name="idadeAnimal">
			<input type="radio" name="unidade_idade" value="Anos">Anos
			<input type="radio" name="unidade_idade" value="Anos">Meses
			<input type="radio" name="unidade_idade" value="Anos">Dias
		</td>
		<td>
	
			<input type="text" name="ong" placeholder="Faz parte de ONG">
			<input type="radio" name="sim" value="sim" onclick="abrir();"/>Sim
			
			<select>
				<option>Selecione</option>
				<option>Frada</option>
				<option>Abrigo Animal Joinville</option>
			</select>
			
			
			<input type="radio" name="sim" value="nao"/>Não
				
		</td>
		</tr>
		
		<tr>
		<td>
		<td>Foto do Animal<input type="file" name="fotoAnimal" placeholder="Foto Animal"><br></td>		
			
		</td>
		</tr>
		
		
			
		<tr>
			<td><input type="text" class="form-control" name="telCadastroAnimal" placeholder="Telefone (xx)xxxx-xxxx"></td>
			<td><input type="text" class="form-control" name="emailCadastroAnimal" placeholder="Email"></td>
		</tr>
			
		<tr>
			
			<td><textarea rows="3" cols="22" name="observacao" placeholder="Mensagem"> </textarea></td>	
		</tr>
			
			
		<tr>
			<td><input type="submit" class="btn btn-primary" value="Cadastrar"> 
			<input type="reset" class="btn btn-primary" value="Limpar Campos"></td>
		</tr>
		
		
	
		</form>
		</table>
</fieldset>

<?php
include('rodapeGeral.php');
?>