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

		<button onclick="return ordemCrescente(this,'<?=$baseDados[0]["nome"]?>')" value='' class='btn btn-success'>
			Mostrar ordem crescente
		</button>

		<button onclick="return ordemDecrescente(this,'<?=$baseDados[0]["nome"]?>')" id='nomes-clientes' class='btn btn-danger'>
			Mostrar ordem decrescente
			<input type='hidden' value='<?= $aux?>'>
		</button><Br>
	<?php

		$j = sizeof($baseDados); // mostrar em ordem decrescente

		for($i=0;$i<sizeof($baseDados);$i++){

		?>
			<div>
				<button onclick="return mostrar(this)" value='<?=

                    "Nome: " . $baseDados[$i]["nome"]. "<hr>" .
                    "CPF: " . $baseDados[$i]["cpf"] . " <hr>" .
                    "Endereço: " . $baseDados[$i]["endereco"] . " <hr>" .
                    "Telefone: " . $baseDados[$i]["telefone"] . " <hr>" .
                    "Grau De Importancia: " . $baseDados[$i]["grauImportancia"] . " <hr>" .
                    "Endereço de cobrança: " . $baseDados[$i]["enderecoCobranca"] . " <hr>";

                ?>' class='mostra-detalhes btn btn-link'>
					<h4 class='nomes'><?=$baseDados[$i]["nome"] . "</h4>";?>
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
	<div class="panel-body" id='detalhes'>

    </div>
</div>
</body>

</div>

<script src='public/scripts/mostra-detalhes.js'></script>
<script src='public/scripts/funcoes-ordenacao.js'></script>

</html>