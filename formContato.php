<?php
include ('cabecalhoGeral.php');
include('conexao.php');
include ('menuGeral.php');
?>

<!--BARRA AZUL JÁ CONFIGURADA: COLOCAR EM TODAS AS PÁGINAS QUE AINDA NÃO POSSUEM -->
<link rel="stylesheet" href="css/style.css">

<div class="barra">
<h3 align="left"> Contato </h3>
</div>
<!---------------------------------------------------------------------------------->
<br>

	<form action="#" method="POST">
	
<br>

<center>

		<table id="tabela" cellspacing="5">
		
		<tr>
			<td><img id="emailImg" src="img/email.png">
			<p id="emailImg"> E-mail: adm@encontrepet.com </p></td>
			
			<td><img id="telefone" src="img/telefone.png">
			<p id="telefone"> Telefone: 0800-1188550 </p></td>
			
			<td><img id="celularImg" src="img/celular.png">
			<p id="celular"> WhatsApp: (47)99465-3033 </p></td>
		</tr>
		
		<tr>
			<td><input id="nome" type="text" class="form-control nomePessoa" name="nomePessoa" placeholder="Nome"></td>
			
			<td><input id="assunto" type="text" class="form-control nomeAssunto" name="nomeAssunto" placeholder="Assunto"></td>
		</tr>
		
		<tr>
			<td><input type="text" id="email" class="form-control nomeEmail" name="nomeEmail" placeholder="E-mail"></td>
		</tr>
		
		<tr>
			<td><textarea rows="3" cols="22" id="mensagem" name="mensagem" class="form-control mensagem" placeholder="Mensagem"></textarea></td>	
		</tr>
		
		</table>	
	<input type="reset"  class="btn btn-default botaoLimpaContato" value="Limpar Campos">
	<input type="submit"  class="btn btn-default botaoEnvia" value="Enviar">
	
</center>	
	</form>
	
<br><br><br>
<?php
include("rodapeGeral.php");
?>