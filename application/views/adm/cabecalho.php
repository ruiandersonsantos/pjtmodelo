<!DOCTYPE html>

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

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navPrincipal">
            <div class="container-fluid">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#elementoCollapsel">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a style="margin-left: 15px; color: white;" href="<?= base_url("/index.php/usuario/login") ?>" class="navbar-brand">PAINEL DE CONTROLE</a>
                </div>

                <div class="collapse navbar-collapse " id="elementoCollapsel">

                    <ul class="nav navbar-nav">
                        <li  class="active"><a href="<?= base_url("/index.php/usuario/login") ?>">Home</a></li>
                        <li><a href="<?= base_url("/index.php/corretor/adm") ?>">Corretor</a></li>
                        <li class="dropdown">
                            <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= site_url("/produto/cadastrar") ?>">Cadastrar</a></li>
                                <li><a href="<?= site_url("/produto/listar") ?>">Listar</a></li>
                            </ul>
                        </li>
                        
                         <li class="dropdown">
                            <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Designer <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= site_url("/slider") ?>">Slider</a></li>
                                
                            </ul>
                        </li>
                        


                       
                         <?php if ($this->session->userdata("usuario_logado")['senha'] != '0000'
                                 or $this->session->userdata("usuario_logado")['senha'] != '1111') : ?>
                            <li><a href="<?= base_url("index.php/usuario/alterasenha") ?>">Alterar Senha</a></li>
                         <?php endif ?>
                        <li><a href="<?= base_url("index.php/usuario/sair") ?>">Sair</a></li>
                    </ul>
                    <?php if ($this->session->userdata("usuario_logado")['senha'] == '0000') : ?>
                        <div>
                            <img style="height: 35px; float: right; margin-top: 8px;" src="<?= $this->session->userdata("usuario_logado")['picture']['data']['url'] ?>"/>
                        </div>
                    <?php endif ?>
                    
                    <?php if ($this->session->userdata("usuario_logado")['senha'] == '1111') : ?>
                        <div>
                            <img style="height: 35px; float: right; margin-top: 8px;" src="<?= $this->session->userdata("usuario_logado")['picture'] ?>"/>
                        </div>
                    <?php endif ?>
                    <div>
                        <p style="margin-right: 15px; color: white;" class="navbar-text navbar-right">
                            Olá <strong><?= $this->session->userdata("usuario_logado")['email'] ?></strong>
                        </p>
                    </div>

                </div>
            </div>
        </nav>
