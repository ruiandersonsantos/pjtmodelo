<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Planos de Saúde</title>

        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href=<?= base_url("css/materialize.min.css") ?>  media="screen,projection">
        <link type="text/css" rel="stylesheet" href=<?= base_url("css/estilo.css") ?>>

    </head>

    <body class=" cyan lighten-4">
        <!-- navbar -->
        <div class="navbar-fixed">
            <nav class="blue darken-3">

                <div class="nav-wrapper">
                    <a id="div" href="<?= base_url() ?>" class="brand-logo"><?=$corretor['titulosite']?></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse">
                        <i class="mdi-navigation-menu"></i>
                    </a>

                    <!-- menu -->
                    <ul class="right hide-on-med-and-down" >
                        <li class="active"><a id="menuMobile_home" href="<?= base_url() ?>">Home</a></li>
                        <li class="no-active"><a href="#">Produtos</a></li>
                        <li class="no-active"><a href="#">Planos</a></li>
                        <li class="no-active"><a href="#">Sobre o Corretor</a></li>
                        <li class="no-active"><a href="#">Fale Conosco</a></li>

                    </ul>
                    <!-- ./menu -->

                    <!-- menu-mobile -->
                    <ul class="side-nav" id="mobile-demo">
                        <li class="active"><a id="menudemo_home" href="/">Home</a></li>
                        <li class="no-active"><a href="#">Produtos</a></li>
                        <li class="no-active"><a href="#">Planos</a></li>
                        <li class="no-active"><a href="#">Sobre o Corretor</a></li>
                        <li class="no-active"><a href="#">Fale Conosco</a></li>
                    </ul>
                    <!-- ./menu-mobile -->

                </div>
            </nav>
        </div>
        <!-- ./navbar -->

        <!-- formulario -->
        <section>
            <h1>Problemas no envio do formulario!</h1> 
            <h3>Tente novamente.</h3>
           
        </section>

        <!-- rodape -->
        <footer class="rodape page-footer blue darken-3" id="divFooter">
            <section>
                <div class="footer-copyright col s12 m12 l12  blue darken-4">
                    <div class="container div_container center-align">
                        Todos os Direitos Reservados a <strong>RS Soluções</strong>
                    </div>
                </div>
            </section>
        </footer>
        <!-- ./rodape -->

        <script type="text/javascript" src=<?= base_url("js/jquery-2.1.1.min.js")?>></script>
        <script type="text/javascript" src=<?= base_url("js/materialize.min.js")?>></script>
        <script type="text/javascript" src=<?= base_url("js/jscript.js")?>></script>

    </body>
</html>
