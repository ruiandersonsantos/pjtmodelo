<?php if ($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php") ?>
<?php endif ?>

<?php if (!$this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalhosemmenu.php") ?>
<?php endif ?>
<section class="sessao_cadastroCorretor">
    <div class="container">


        <h1><?= $this->session->flashdata("sucesso") ?></h1>
        
        <?php if (!$this->session->userdata("usuario_logado")) : ?>
            <form class="form-horizontal" id="form_login" method="post" action="logar">
                <div class="row">
                    <?php include("mensagem.php") ?>
                  <div id="tituloLogin" name="tituloLogin"><h1>Login do sistema</h1></div>

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
                            <label class="sr-only" for="senha">Senha</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                            <input type="password" name="senha" class="form-control" placeholder="Senha" required="autofocus">
                        </div>
                    </div>

                    <div class="row form-group-lg" id="div_input">
                        <div class="col-xs-offset-4 col-xs-4 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 text-left">
                            <input type="submit" name="button" class="form-control btn btn-primary" value="Entrar" placeholder="Senha" required="autofocus">
                        </div>
                    </div>  

                    <div class="row form-group-lg">
                        <div>
                            <a href="recuperasenha">Esqueci minha senha</a>
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
