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
		<fieldset>
			
			<legend><h2>Faça seu orçamento de aluguel</h2></legend>

				<form action="aluguel.php" method="post" >
					
					<label for="data">Data do orçamento</label>
					<input type="date" name="data" id="data" ><br><br>
					<label for="tempo">Tempo de aluguel</label>
					<input type="number" name="tempo" id="tempo" min="1"  required><br><br>
					<label>Escolha o veículo</label>
					<select name="modelo" required><br><br>
						<option>Hatch</option>
						<option>Sedan</option>
						<option>Suv</option>
					</select><br>
					<label for="nome">Nome Completo</label>
					<input type="text" name="nome" id="nome" required><br><br>
					<label for="email">Email</label>
					<input type="email" name="email" id="email" required><br><br>
					<label>Alguma Observação?</label><br>
					<input type="text" name="obs" id="obs" ><br><br>

					<input id="enviar"  type="submit" name="enviar" value="Enviar">

					
				</form>
		</fieldset>
		


	</section>
	<br>
	<br>
	<br>



	<footer>
		<p>Criado por Rafael Apolinario</p>
	</footer>




</body>
</html>