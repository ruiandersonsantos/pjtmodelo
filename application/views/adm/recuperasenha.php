<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<?php if (!$this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalhosemmenu.php") ?>
<?php endif ?>

<section class="sessao_cadastroCorretor" style="margin-top: 90px; text-align: center;" >
    <div class="container">
      
        <form class="form-horizontal" id="form_login" method="post" action="reenviandoSenha">
            <div class="row">
                <?php include("mensagem.php") ?>
                <div id="tituloLogin" name="tituloLogin"><h1>Recuperar Senha</h1></div>

                <div class="form-group-lg">
                    <div>
                        <label class="sr-only" id="email" for="email">Email</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="autofocus">
                    </div>
                </div>

                <div class="form-group-lg">
                    <div>
                        <label class="sr-only" for="cpf">CPF</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                        <input type="text" name="cpf" class="form-control" placeholder="cpf" required="autofocus">
                    </div>
                </div>

                <div class="row form-group-lg" id="div_input">
                    <div class="col-xs-offset-4 col-xs-4 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 text-left">
                        <input type="submit" name="button" class="form-control btn btn-primary" value="Recuperar" required="autofocus">
                    </div>
                </div>  

            </div>
        </form>

    </div>
</section>
<?php include("rodape.php") ?>