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
			<h3><strong>Aggiungi Piatto:</strong></h3>
			<br>
			<p><strong>Nome:</strong></p>
			<input type='text' class='nome-piatto' placeholder='Nome...'>
			<p><strong>Categoria:</strong></p>
			<select  class='categoria-piatto'>
				<option value='antipasto'>Antipasto</option>
				<option value='primo'>Primo</option>
				<option value='secondo'>Secondo</option>
				<option value='fritti'>Fritti</option>
				<option value='pizza'>Pizza</option>
				<option value='kebab'>Kebab</option>
				<option value='sushi'>Sushi</option>
				<option value='contorno'>Contorno</option>
				<option value='dolce'>Dolce</option>
				<option value='bevande'>Bevande</option>
			</select>
			<p><strong>Ingredienti:</strong></p>
			<input type='text' class='ingredienti-piatto' placeholder='Ingredienti...'>
			<p><strong>Prezzo:</strong></p>
			<input type='number' class='prezzo-piatto' step=0.01 min=0.01 placeholder='Prezzo...'>
			<br>
			<button id='salva-piatto'>Aggiungi</button>
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
            <div class="footer-bottom">?? 2020 All Rights Reserved
                NotEatYet.com</div>
        </footer>
	<!--fine fixme-->
</body>
</html>
