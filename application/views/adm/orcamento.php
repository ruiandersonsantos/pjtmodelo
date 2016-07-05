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
                    <div class="col-sm-6 col-md-6">

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>Solicitação de Orçamento</h3>
                            </div>

                            <div class="panel-body">  
                                <p><strong>Nome:</strong> <?= $cliente['nome'] ?></p>
                                <p><strong>Telefone:</strong> <?= $cliente['telefone'] ?></p>
                                <p><strong>Email:</strong> <?= $cliente['email'] ?></p>
                                <p><strong>Cidade/Estado:</strong> <?= $cliente['cidade'] ?></p>

                            </div>

                            <div class="panel-footer">
                                <p><strong>Tipo de Plano:</strong> <?= $cliente['tipo_plano'] ?></p>
                                <p>
                                    <strong>Convenio:</strong>
                                    <br/>
                                    <?php
                                    foreach ($planos as $value) {
                                        echo $value ;
                                    }
                                    ?>
                                </p>
                                <p>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Faixa Etária</strong></td>
                                            <td class="align_td"><strong>Quant.</strong></td>
                                        </tr>
                                        <?php foreach ($faixas as $value):  ?>
                                        <tr>
                                            <td><?php echo str_replace('faixa',' ',str_replace('_',' ', substr($value,0,strpos($value,'-')))) ?></td>
                                            <td><?php echo str_replace('-',' ',substr($value,strpos($value,'-'))) ?></td>                                            
                                        </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                                </p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>  

        </section>
        <!-- ./fale conosco -->

        <?php include("rodape.php") ?>

