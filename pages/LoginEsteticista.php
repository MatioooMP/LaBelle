<?php
require_once(./../config/config.php);

?>


<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Esteticista</title>
	<link rel="stylesheet" href="./../css/reset.css">
	<link rel="stylesheet" href="./../css/main.css">
	<link rel="stylesheet" href="./../css/Esteticistastyle.css">

</head>

<body>

	<header class="Header" id="Header">

		<div id="MenuEsteticista">


			<a href="javascript:void(0);" id="grid-img" onclick="Apareceu()"> <img src="../Icones/Fa-Light.png"
					alt="" style="width: 30%" id="img">  </a>
			<ul id="Lista" style="display: none;">
				
				<li><a href="#">Configurações</a> </li>
				<li> <a href="#">Ajuda</a></li>
				<li><a href="#">Editar Cadastro</a></li>
				<li><a href="#">Excluir Conta</a></li>
				<li><a href="#">Log Out</a></li>
				
			</ul>
			<p id="BoasVindas">Bem Vinda "teste" </p>
			<p id="NomeEsteticista"></p>
		</div>
		<h1>La belle</h1>

	</header>

	<main>

		<div class="Div1">
			<div class="icones"><a href="#" title="Clientes" target="_parent"> <img src="./../Icones/Clientes.png"
						alt="Clientes">Clientes</a></div>
			<div class="icones"><a href="#" title="Agenda" target="_parent"> <img src="./../Icones/Afenda.png"
						alt="Agenda">
					Agenda</a></div>
		</div>

		<div class="Div1">
			<div class="icones"> <a href="#" title="Fichas_de_Avaliação" target="_parent" id="Ficha"> <img
						src="./../Icones/Ficha.png" alt="Fichas"> Fichas de Avaliação</a></div>
			<div class="icones"><a href="#" title="Evoluções" target="_parent"> <img src="./../Icones/Evolucoes.png"
						alt="">
					Evoluções</a></div>
		</div>

	</main>



	<script>

			var lista = document.getElementById("Lista");
			var grid_img = document.getElementById("grid-img");
			var header = document.getElementsByTagName("Header");
			var paragrafo = document.getElementById("BoasVindas");
			paragrafo.style.transform = 'translate(-20%)';
			var img = document.getElementById("img");
			grid_img.style.height = img.style.height;
			grid_img.style.widows = img.style.width;
			var div = document.getElementById("MenuEsteticista");
			div.style.width = "30%";	
			
			if(window.innerWidth <= 600 && paragrafo.style.transform == 'translate(-20%)' && div.style.width === "30%")
			{
				paragrafo.style.transform = "translate(-60%)";
				img.style.width = "30%";
				
				

			}
			else
			{
				 paragrafo.style.transform = 'translate(-20%)';
				 div.style.width = "30%";	
				 

			}
			
			

		function Apareceu() {
			var clicou;
			
			grid_img.style.display = "fixed";
			if (lista.style.display === "none") {
				lista.style.display = "block";
				// img.style.width = "20%";


				paragrafo.style.transform = 'translate(-140%)';

				if(window.innerWidth <= 600 )
				{
					img.style.width = "36px";
					paragrafo.style.transform = 'translate(-10%)';


				}
				else
				{
					img.style.width = "30%";
					 paragrafo.style.transform = 'translate(-46%)';


				}
				
				


			}
			else {
				lista.style.display = "none";
				

				 if(widow.innerWidth <=600)
				 {
				 	img.style.width = "10%";

				 }
				 else
				 {
				 	img.style.width = "100%";
				
				 	paragrafo.style.transform = 'translate(-10%)';
					
				 }
					
				
			}

		}



	</script>

</body>

</html>