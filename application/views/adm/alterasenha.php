<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<?php if (!$this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalhosemmenu.php") ?>
<?php endif ?>
<section class="sessao_cadastroCorretor">
    <div class="container">

        <?php if ($this->session->userdata("usuario_logado")) : ?>
            <form class="form-horizontal" id="form_login" method="post" action="trocarsenha">
                <div class="row">
                    <?php include("mensagem.php") ?>
                    <div id="tituloLogin" name="tituloLogin"><h1>Alteração de senha</h1></div>

                    <div class="form-group-lg">
                        <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                            <input type="email" value="<?= $this->session->userdata("usuario_logado")['email'] ?>" name="email" class="form-control" disabled="true" required="autofocus">
                        </div>
                    </div>

                    <div class="form-group-lg">
                        <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                            <input type="password" name="senha" class="form-control" placeholder="Senha Atual" required="autofocus">
                        </div>
                    </div>
                    
                    <div class="form-group-lg">
                        <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                            <input type="password" name="novasenha" class="form-control" placeholder="Nova Senha" required="autofocus">
                        </div>
                    </div>
                    
                    <div class="form-group-lg">
                        <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                            <input type="password" name="confnovasenha" class="form-control" placeholder="Confirme Nova Senha" required="autofocus">
                        </div>
                    </div>

                    <div class="row form-group-lg" id="div_input">
                        <div class="col-xs-offset-4 col-xs-4 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 text-left">
                            <input type="submit" name="button" class="form-control btn btn-primary" value="Alterar" placeholder="Senha" required="autofocus">
                        </div>
                    </div>  

                  

                </div>
            </form>
        <?php endif ?>
    </div>
</section>

<script src="<?= base_url("js_b/jquery-1.11.3.min.js") ?>"></script>
<script src="<?= base_url("js_b/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("js_b/jscript.js") ?>"></script>
</body>
</html>
