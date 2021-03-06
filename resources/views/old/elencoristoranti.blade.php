<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NotEatYet</title>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/main3.js"></script>
 <link rel="stylesheet" type="text/css"  href="{{ asset('/old-data/style.css') }}">

<!-- jQuery Modal -->
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

</head>
<body>

	<header class="top-header">
		<nav class="top-nav">

			<li><input id="modal-registrati" class="registrati button"
					type="button" value="Registrati"></li>

			<!--LOGO-->
			<li class="logo"><a href="/old/"><img class="img-logo"
					src='/old-data/img/Logo_rev05-04.png' alt=""></a></li>

			<!--REGISTRA LOGIN-->
			<div class="top-reg-log">
				<li><input id="modal-login" class="login button" type="button"
					value="Login"></li>
				<li>
				<form method="get" action="/logout">
				<button class="login button" type="submit">Logout
				</form>
				</li>
			</div>
		</nav>
	</header>
	<div class="marginLR">

	<br>
	<div class='bottone-categoria'>
			<p class="logo-img-cat" >
					Tutti i nostri ristoranti:
			</p>
	</div>
	<br>
	<dl id='lista-ristoranti'>

	<!-- The Modal -->
						<div id="modaleRistorante" class="modal">
							<!-- Modal content -->
							<div class="modal-content">
								<div class="modal-header">
									<span class="close" id='close-modal'>&times;</span>
									<h2 id='titolo-modale'></h2>
								</div>
								<div id='bottoni-modale'></div>
								<div id="myDIV">
									<div class="render-dettaglio-ristorante"></div>
									<div class="render-modifica-ristorante"></div>
									<div class="elimina-ristorante"></div>
									<div class="render-aggiungi-piatto"></div>
								</div>
								<h3 style='margin-top: 20px;'>Menù</h3>
								<div class='lista-menu'>
									<div class='colonna-menu1' >
									<ul id='render-menu-antipasto'>
									</ul>
									<ul id='render-menu-primo'>
									</ul>
									<ul id='render-menu-secondo'>
									</ul>
									<ul id='render-menu-fritti'>
									</ul>
									<ul id='render-menu-pizza'>
									</ul>
									<ul id='render-menu-kebab'>
									</ul>
									<ul id='render-menu-sushi'>
									</ul>
									<ul id='render-menu-contorno'>
									</ul>
									<ul id='render-menu-dolce'>
									</ul>
									<ul id='render-menu-bevande'>
									</ul>
									</div>
									<div class='render-dettaglio-piatto colonna-menu2'></div>
								</div>
								<br>
								<br>
							</div>
						</div>
						<!--fine  modal V02-->

	<!-- The Modal -->
						<div id="modale-recensioni" class="modal">
							<!-- Modal content -->
							<div class="modal-content">
								<div class="modal-header">
									<span class="close" id='close-modale'>&times;</span>
									<h2 id='titolo-modale-recensioni'></h2>
								</div>
								<div id='bottoni-modale-recensioni'></div>
								<div style="margin-top: 20px" id="aggiungi-recensione"></div>
								<div>
									<h3 class='allineamentosx'>Recensioni:</h3>
									<br>
									<ul class='allineamentosx' id='render-recensioni'>
									</ul>
								</div>
								<br>
								<br>
							</div>
						</div>
						<!--fine  modal V02-->
	</dl>
</div>


		<!--FIXME-->
		<footer>
			<div class="torna-home marginLR">
				<a href='/index.html'>&#9664; Torna alla Home</a>
			</div>
			<div class="clas footer-content">
				<div class="footer-section about"></div>
				<div class="footer-section links"></div>
				<div class="footer-section contact"></div>

			</div>
			<div class="footer-bottom">© 2020 All Rights Reserved
				NotEatYet.com</div>
		</footer>
			<!--fine fixme-->
	</body>
</html>
