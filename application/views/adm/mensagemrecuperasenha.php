<html>
    <head>
        <meta charset="UTF-8">
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- adicionar CSS Bootstrap -->
        <link href="<?= base_url("css_b/bootstrap.min.css")?>" rel="stylesheet">  
        <!-- CSS personalizado -->
        <link href = "<?= base_url("css_b/estilo.css")?>" rel = "stylesheet" media = "screen">

        <title>Area Administrativa</title>
    </head>

    <body>
        <div class="container">
            <div class="container">
            <div class="row">

                <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6">

                    <div class="panel panel-default">
                        <div class="panel-heading"  style="background: black; color: white;">
                            <h1 class="text-center">Sistema do Corretor</h1>

                        </div>
                        <div class="panel-body text-justify">
                            <p>Prezado(a) <strong><?=$mensagem['nome']?></strong>,<br/><br/>
                                Esta mensagem foi enviada na sequência de um pedido na <strong>[nome do site]</strong> para redifinição de
                                senha.<br/><br/>
                                Para redefinir sua senha click no link abaixo:<br/>
                                <a href="<?= base_url('/index.php/usuario/login') ?>" class=" " target="_blank"><?= base_url('/index.php/usuario/login') ?></a>
                                <br/>e faça login utilizando as seguintes informações:<br/><br/>
                                 Senha provisória: <?=$mensagem['senha']?><br/><br/>
                            </p>
                            <hr>
                            <p> 
                            Caso não tenha feito essa solicitação, é provável que outro usuário tenha inserido
                            seu endereço de email por engano e sua conta ainda está protegida.
                            </p>
                        </div>
                        <div class="panel-footer text-center"  style="background: black; color: white;">
                            <?=$mensagem['site']?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="<?= base_url("js_b/jquery-1.11.3.min.js")?>"></script>
        <script src="<?= base_url("js_b/bootstrap.min.js")?>"></script>
        <script src="<?= base_url("js_b/jscript.js")?>"></script>
    </body>
</html>