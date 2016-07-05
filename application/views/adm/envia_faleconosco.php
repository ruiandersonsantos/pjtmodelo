<html>
    <head>
        <meta charset="UTF-8">
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- adicionar CSS Bootstrap -->
        <link href="<?= base_url("css_b/bootstrap.min.css") ?>" rel="stylesheet">  
        <!-- CSS personalizado -->
        <link href = "<?= base_url("css_b/estilo.css") ?>" rel = "stylesheet" media = "screen">
        
        <title>Area Administrativa</title>
    </head>

    <body>
<!-- fale conosco -->
<section class="fale-conosco" style="margin-top: 40px;">
    <div class="container">           
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6 ">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Fale Conosco</h3>
                    </div>

                    <div class="panel-body">  
                        <p><strong>Nome:</strong> <?= $cliente['nome'] ?> </p>
                        <p><strong>Telefone:</strong> <?= $cliente['telefone'] ?></p>
                        <p><strong>Email:</strong> <?= $cliente['email'] ?></p>
                        <p><strong>Mensagem:</strong><?= $cliente['mensagem'] ?></p>
                    </div>
                </div>

            </div>
        </div>



    </div>  
</section>
<!-- ./fale conosco -->

<?php include("rodape.php") ?>

