<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotEatYet</title>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/main2.js"></script>
    <link rel="stylesheet" type="text/css"  href="{{ asset('/old-data/style.css') }}">

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
</head>
	<body>
	<header class="top-header" style='z-index: 1000;'>
        <nav class="top-nav">

            <li><input id="modal-registrati" class="registrati button"
                    type="button" value="Registrati"></li>

            <!--LOGO-->
           <li class="logo"><a href="/old/"><img class="img-logo"
					src='/old-data/img/Logo_rev05-04.png' alt=""></a></li>

            <!--REGISTRA LOGIN-->
            <div class="top-reg-log">
                <li>
                <form method="get" action="/logout">
                <button class="login button" type="submit">Logout
                </form>
                </li>
            </div>
        </nav>
    </header>
	<div class='templet-add'>
		<p><strong>Categoria:</strong></p>
		<select class='categoria-ristorante'>
			<option value='pizzeria'>Pizzeria</option>
			<option value='sushi'>Sushi</option>
			<option value='etnico'>Etnico</option>
			<option value='kebab'>Kebab</option>
			<option value='altro'>Altro</option>
		</select>
		<p><strong>Nome:</strong></p>
		<input type='text' class='nome-ristorante' placeholder='Nome...'>
		<p><strong>Partita Iva:</strong></p>
		<input type='text' class='piva' placeholder='Partita IVA...'>
		<p><strong>Ragione Sociale:</strong></p>
		<input type='text' class='ragione-sociale' placeholder='Ragione Sociale...'>
		<p><strong>Regione:</strong></p>
		<input type='text' class='regione' placeholder='Regione...'>
		<p><strong>Città:</strong></p>
		<input type='text' class='citta' placeholder='Città...'>
		<p><strong>Via:</strong></p>
		<input type='text' class='via' placeholder='Via...'>
		<p><strong>Numero Civico:</strong></p>
		<input type='number' class='numero-civico' placeholder='Numero Civico...'>
		<p><strong>Id Ristoratore:</strong></p>
		<select name='select-id-ristoratore' class='id-ristoratore'>
		</select>
		<br>
		<button id='salva-ristorante-admin'>Aggiungi</button>
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
