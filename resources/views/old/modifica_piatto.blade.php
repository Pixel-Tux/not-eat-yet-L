<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotEatYet</title>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/main_modifica_piatto.js"></script>
     <link rel="stylesheet" type="text/css"  href="{{ asset('/old-data/style.css') }}">
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
        <div class='render-modifica-piatto'>
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
