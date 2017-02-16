<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="public/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body>

<?php
    use GMR\classes;
    require_once('public/inicializa-vetor.php');
?>

<div id='tudo'>
<div id='mostra-nomes-todos-clientes'>
	<h1>Lista de clientes</h1>
	<h3>Clique no nome para detalhes</h3>
	<form>

		<button onclick="return ordemCrescente(this,'<?=$clientes[0]->getNome()?>')" value='' class='btn btn-success'>
			Mostrar ordem crescente
		</button>

		<button onclick="return ordemDecrescente(this,'<?=$clientes[0]->getNome()?>')" id='nomes-clientes' class='btn btn-danger'>
			Mostrar ordem decrescente
			<input type='hidden' value='<?= $aux?>'>
		</button><Br>
	<?php

		$j = 9; // mostrar em ordem decrescente

		for($i=0;$i<10;$i++){

		?>
			<div>
				<button onclick="return mostrar(this)" value='<?=$clientes[$i]->toString()?>' class='mostra-detalhes btn btn-link'>
					<h4 class='nomes'><?=$clientes[$i]->getNome() . "</h4>";?>
				</button>
				<br>
			</div>

		<?php
				$j--; // está dentro do for
			} // final for
		?>
	</form>
</div>

<div id='detalhamento-de-clientes' class="panel panel-default">
	<h2 style='margin:1%;'>Dados do cliente</h2>
	<div class="panel-body" id='detalhes'></div>
</div>
</body>

</div>

<script src='public/scripts/mostra-detalhes.js'></script>
<script src='public/scripts/funcoes-ordenacao.js'></script>

</html>