<!-- TODO1: PHP: Ilustre um exemplo de juncao de arquivos-->


<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comércio Eletrônico</title>

	<link rel="shortcut icon" href="favicon/favicon.ico" /> <!-- favicon.ico-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />

	<!-- A ordem aqui eh importante: primeiro deve vir o 'jquery.js', depois scripts.js, porque este último utiliza 'jquery.js'-->
	<script src="js/jquery-3.7.1.js"></script>
	<script src="js/decimal.js"></script>
	<script src="js/scripts.js"></script>

</head>

<body>

	<!-- TODO1 -->
	<?php

	/* Quando uma classe eh invocada no PHP e ela nao existe,
	   a funcao '__autoload()' a carrega automaticamente. 

	   Note que deve existir uma classe por arquivo.
	   O arquivo deve ter o mesmo nome da classe.
	*/
	function __autoload($classe){
		require_once($classe . '.php');
	}

	echo '<h1>Comércio Eletrônico</h1>';

	$produto = new Produto("lápis", 111, "fornecedor1@utfpr.edu.br", "preto", 10);

	?>

	<table id="tabela">
		<tr>
			<th>Produto</th>
			<th>Código</th>
			<th>E-mail do Fornecedor</th>
			<th>Cor</th>
			<th>Tamanho</th>
		</tr>
		 
			<?php
				$listaProdutos = [];

				//Polimorfismo
				$produto = new Produto("Lápis", 111, "fornecedor111@utfpr.edu.br","preto","10");
				array_push($listaProdutos, $produto);
				
				foreach($listaProdutos as $item){
					echo '<tr><td>' . $item->getNome() . '</td>';
					echo '<td>' . $item->getCodigo() . '</td>';
					echo '<td>' . $item->getEmail() . '</td>';
					echo '<td>' . $item->getCor() . '</td>';
					echo '<td>' . $item->getTamanho() . '</td></tr>';
				}
			?>
		
	</table>

</body>

</html>