<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale=1>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Aluguel de Veicúlos</title>
    
</head>
<body>
	<div>
	<header> 

	<h1>Aluguel de Veicúlos </h3>

	</header>

	</div><br><br><br><br><br><br>
	
	
	<section>
		

		<div class="formulario">

			<form action="analise.php" method="get" target="">

				<label for="pesquisa">Pesquisar</label>
				<input type="text" id="pesquisa" name="pesquisa" placeholder="digite aqui sua pesquisa">
              
				<input id="enviar"  type="submit" name="enviar" value="Pesquisar">

			</form><br><br>
					
	</section>
	<section class="conteiner" id="grid-conteiner">
		<div class="grid">

			<div>
				<h2> Hatch</h2>
				<img src="imagens/hatch.png" alt="Carro hatch">
				<a href="hatch.html">ALUGUE AGORA</a>
			</div>


			<div>
				<h2> Sedan</h2>
				<img src="imagens/sedan.png" alt="Carro Sedan">
				<a href="sedan.html">ALUGUE AGORA</a>
			</div>

			<div>
				<h2>  Suv</h2>
				<img src="imagens/suv.png">
				<a href="suv.html">ALUGUE AGORA</a>

			</div>
			<!--
			<div>Conteudo 4</div>
			<div>Conteudo 5</div>
			<div>Conteudo 6</div>
			-->
			
		

		</div>
		

	</section>
	<br>
	<br>
	<br>
	<br>
	<br>
	<section>
		<?php	

		$data = $_POST["data"];
		$tempo = $_POST["tempo"];
		$modelo = $_POST["modelo"];
		$nome = $_POST["nome"];
		$obs = $_POST["obs"];

		$modelo1 = $tempo*100;
		$modelo2 = $tempo*200;
		$modelo3 = $tempo*300;

		echo "Ola $nome, seja muito bem vindo a nossa pagina de orçamentos <br>";
		echo "O modelo escolhido foi $modelo <br>";
		echo "Data da consulta $data <br>";


		if ($modelo == "Hatch") {
			echo "O valor total do orçamento é R$: $modelo1 reais";
			
		}elseif ($modelo == "Sedan") {
			echo "O valor total do orçamento é R$: $modelo2 reais";
			
		}else{
			echo "O valor total do orçamento é R$: $modelo3 reais";
		}



		?>
		
		<br><br>
		<a href="https://web.whatsapp.com/">Contratar</a><br>
		<a href="index.php">Voltar</a>
	</section>
	<br>
	<br>
	<br>



	<footer>
		<p>Criado por Rafael Apolinario</p>
	</footer>




</body>
</html>