<?php
include("cabecalhoGeral.php");
include ('menuGeral.php');
include("conexao.php");
?>
<div class="barra" >
<h3 align="left">CACHORROS</h3>
</div>

<br>
<center>
<div class="container-fluid">
	<label>Sexo:</label>
	<select class="selecionar">
	<option>Todos</option>
		<option>...</option>
			<option>...</option>
	</select>
	
	<label>Cor:</label>
	<select class="selecionar">
	<option>Todos</option>
		<option>...</option>
			<option>...</option>
	</select>
	
	<label>Pelagem:</label>
	<select class="selecionar">
	<option>Todos</option>
		<option>...</option>
			<option>...</option>
	</select>

	<input type="submit" class="btn btn-default filtroAdocao" value="Filtrar">

</div>
</center>

<?php

$comando="SELECT * FROM animais WHERE tipo_animal='Cachorro'";
$resultado=mysqli_query($conexao,$comando);
$animais=array();

while($guardaAnimais=mysqli_fetch_assoc($resultado)){
	array_push($animais,$guardaAnimais);
}

foreach($animais as $cadaAnimal){

?>
<table><tr><td>
<div class="container text-center">    
  <div class="row">
	<div class="col-sm-3">
      <div class="wellX">
    <br>
		<img class="img-rounded" src="img/dogs/<?php echo $cadaAnimal['foto'];?>"><br><br>
		<p align="justify" class="pDogs"><b>Nome:</b> <?php echo $cadaAnimal['nome_animal'];?><br>
		<b>Idade:</b> <?php echo $cadaAnimal['idade_animal'];?><br>
		<b>Pelagem:</b> <?php echo $cadaAnimal['pelagem_animal'];?><br>
		<b>Cor:</b> <?php echo $cadaAnimal['cor_animal'];?><br>
		<b>Sexo:</b> <?php echo $cadaAnimal['sexo'];?><br>
		<b>Observações:</b> <?php echo $cadaAnimal['observacoes'];?>
	</p>
     </div>
    </div>
    </div>
  </div>
</div></td>
</tr>
<?php
}
?>
</table>
<?php
include("rodapeGeral.php");
?>