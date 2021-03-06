{{--@dd($__data)--}}
<head>
    <title>NotEatYet</title>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/main2.js"></script>
    <link rel="stylesheet" type="text/css"  href="{{ asset('/old-data/style.css') }}">

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
</head>
<body>
<header class="top-header">
    <nav class="top-nav">

        <li id='render-bottone-registrati'><input id="modal-registrati" class="registrati button"
                                                  type="button" value="Registrati"></li>
        <!--LOGO-->
        <li class="logo"><a href="/old/"><img class="img-logo"
                                                    src='/old-data/img/Logo_rev05-04.png'  alt=""></a></li>

        <!--REGISTRA LOGIN-->
        <div class="top-reg-log">
            <a href="/old/login" id='render-bottone-login'><input id="modal-login" class="login button" type="button"
                                                 value="Login"></a>
            <a id='render-bottone-logout'>
                <form method="get" action="/logout">
                    <button class="login button" type="submit" id="id-button-logout">Logout
                </form>
            </a>
        </div>
    </nav>
</header>

<main class="margin15pxB">

    <!--IMG "I NOSTRI RISTORANTI"-->
    <div class="centro ombra">
        <a href="/elencoristoranti.html"> <img class='ristoranti-img'
                                               src='/old-data/img/i-Nostri-Ristoranti.png'
                                               alt="i-Nostri-Ristoranti" border="0">
        </a>
    </div>

    <!--RISTORANTI PER CATEGORIA-->
    <div class="ristoranti">
        <ul>
            <div>
                <div class='bottone-categoria'>
                    <a href="/elencopizzeria.html" class="logo-img-cat">
                        <img
                            src='/old-data/img/Pizza.png'
                            alt="Categoria-Pizzerie" border="0"> Pizzeria
                    </a>
                </div>
                <!--  	<dl id='lista-pizzeria'>
                    </dl> -->
            </div>
            <div>
                <div class='bottone-categoria'>
                    <a href="/elencosushi.html" class="logo-img-cat"> <img
                            src='/old-data/img/Sushi.png'
                            alt="Categoria-Pizzerie" border="0"> Sushi
                    </a>
                </div>
                <!--  	<dl id='lista-sushi'>
                </dl> -->
            </div>
            <div>
                <div class='bottone-categoria'>
                    <a href="/elencoetnico.html" class="logo-img-cat"> <img
                            src='/old-data/img/Etnico.png'
                            alt="Categoria-Pizzerie" border="0"> Etnico
                    </a>
                </div>
                <!--  	<dl id='lista-etnico'>
                    </dl> -->
            </div>
            <div>
                <div class='bottone-categoria'>
                    <a href="/elencokebab.html" class="logo-img-cat"> <img
                            src='/old-data/img/Kebab.png'
                            alt="Categoria-Pizzerie" border="0"> Kebab
                    </a>
                </div>
                <!--  	<dl id='lista-kebab'>
                [MODALE]
                </dl> -->
            </div>
            <!-- ALTRO -->
            <div>
                <div class='bottone-categoria'>
                    <a href="/elencoaltro.html" class="logo-img-cat">
                        <img src='/old-data/img/Altro2.png' alt="Altro2" border="0">
                        Altro
                    </a>
                </div>
                <!--  	<dl id='lista-altro'>
                    </dl> -->
            </div>
        </ul>
    </div>
</main>


<!--FIXME-->
<footer>
    <div class="torna-home marginLR">
        <button class='gestisci-ristorante'><a href='/pannello_ristorante.html'>&#9664; Gestisci il tuo ristorante</a></button>
    </div>
    <div class="torna-home marginLR">
        <button class='gestisci-admin'><a href='/pannello_admin.html'>&#9664; Gestisci il sito</a></button>
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
