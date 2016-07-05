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
            <div class="container">
                <div class="row" id="div_row_form1">
                    <div class="col s12 m12 l8" >

                        <!-- Card Título formulario 1 -->
                        <div class="card z-depth-4">
                            <div class="card-content  cyan lighten-5">
                                <h5 class="left-align"><strong>Receba todas as informações em seu e-mail</strong></h5>
                                <p>Seus dados estarão 100% seguros conosco! Os campos com * são obrigatórios, 
                                    sem eles não teremos como entrar em contato com você!
                                </p>
                            </div> 

                            <!-- Card formulario -->
                            <div class="card-action ">
                                <div class="row">
                                    <form class="col s12 m12 l12" method="post" action="<?= base_url("/index.php/formulario/orcamento") ?>">
                                        <div class="row"> 
                                            <div class="input-field col s12 m12 l8 cadastro">
                                                <input required="" name="nome"  id="nome" type="text" class="validate">
                                                <label for="nome">Nome *</label>
                                            </div>

                                            <div class="input-field col s12 m12 l4 cadastro">
                                                <input required="" name="telefone" id="telefone" type="text" class="validate">
                                                <label for="telefone">Telefone *</label>
                                            </div>    
                                        </div>

                                        <div class="row">                                          
                                            <div class="input-field col s12 m12 l8 cadastro">
                                                <input required="" name="email" id="email" type="email" class="validate">
                                                <label for="email">Email *</label>
                                            </div>
                                            <div class="input-field col s12 m12 l4 cadastro">
                                                <input required="" name="cidade" id="cidade" type="text" class="validate">
                                                <label for="cidade">Cidade/Estado *</label>
                                            </div>                                           
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select required="" class="select_formulario" id="tipo_plano" name="tipo_plano">
                                                    <option value="Plano Individual/Familiar">Plano Individual/Familiar</option>
                                                    <option value="Plano Empresarial">Plano Empresarial</option>
                                                    <option value="Plano por Adesão">Plano por Adesão</option>
                                                    <option value="Plano Odontológico">Plano Odontológico</option>
                                                </select>
                                                <label>Selecione o tipo de Plano</label>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                          <h6>Selecione um plano ou mais para receber informações:</h6>
                                        <div class="row" id="divForm2_convenio">
                                            <p class="col s12 m12 l3">
                                                <input type="checkbox" class="filled-in" name="check_Amil" id="check_Amil"/>
                                                <label for="check_Amil">Amil</label>
                                            </p>

                                            <p class="col s12 m12 l3">
                                                <input type="checkbox" class="filled-in" name="check_Unimed" id="check_Unimed"/>
                                                <label for="check_Unimed">Unimed</label>
                                            </p>

                                            <p class="col s12 m12 l3">
                                                <input type="checkbox" class="filled-in" name="check_Golden" id="check_Golden"/>
                                                <label for="check_Golden">Golden</label>
                                            </p>

                                            <p class="col s12 m12 l3">
                                                <input type="checkbox" class="filled-in" name="check_Cemeru" id="check_Cemeru"/>
                                                <label for="check_Cemeru">Cemeru</label>
                                            </p>
                                        </div>

                                        <div class="row">
                                            <p class="col s12 m12 l3">
                                                <input type="checkbox" class="filled-in" name="check_Intermedica" id="check_Intermedica"/>
                                                <label for="check_Intermedica">Intermedica</label>
                                            </p>

                                            <p class="col s12 m12 l3">
                                                <input type="checkbox" class="filled-in" name="check_Bradesco" id="check_Bradesco"/>
                                                <label for="check_Bradesco">Bradesco</label>
                                            </p>
                                            <p class="col s12 m12 l3">
                                                <input type="checkbox" class="filled-in" name="check_Dix" id="check_Dix"/>
                                                <label for="check_Dix">Dix</label>
                                            </p>

                                            <p class="col s12 m12 l3">
                                                <input type="checkbox" class="filled-in" name="check_outros" id="check_outros"/>
                                                <label for="check_outros">Outros</label>
                                            </p>
                                        </div>

                                        <br/>
                                        <br/>

                                        <!-- faixa etária -->
                                        <div class="row">
                                            <h6><strong>Quantidade de usuários</strong><br/></h6>
                                            <p style="font-size: 14px;">Por favor especifique a quantidade dentro das faixas etárias</p>

                                            <div class="input-field col s12 m12 l8 faixa_etaria">
                                                <input id="faixa_00_a_18" name="faixa_00_a_18" type="text" title="Insira a quantidade de usuário que possui a idade entre 00 a 18 anos" class="validate">
                                                <label for="faixa_00_a_18">00 a 18 anos</label>
                                            </div>

                                            <div class="input-field col s12 m12 l8 faixa_etaria">
                                                <input id="faixa_19_a_23" name="faixa_19_a_23" type="text" title="Insira a quantidade de usuário que possui a idade entre 19 a 23 anos" class="validate">
                                                <label for="faixa_19_a_23">19 a 23 anos</label>
                                            </div>

                                            <div class="input-field col s12 m12 l8 faixa_etaria">
                                                <input id="faixa_24_a_28" name="faixa_24_a_28" type="text" title="Insira a quantidade de usuário que possui a idade entre 24 a 28 anos" class="validate">
                                                <label for="faixa_24_a_28">24 a 28 anos</label>
                                            </div>

                                            <div class="input-field col s12 m12 l8 faixa_etaria">
                                                <input id="faixa_29_a_33" name="faixa_29_a_33" type="text" title="Insira a quantidade de usuário que possui a idade entre 29 a 33 anos" class="validate">
                                                <label for="faixa_29_a_33">29 a 33 anos</label>
                                            </div>

                                            <div class="input-field col s12 m12 l8 faixa_etaria">
                                                <input id="faixa_34_a_38" name="faixa_34_a_38" type="text" title="Insira a quantidade de usuário que possui a idade entre 34 a 38 anos" class="validate">
                                                <label for="faixa_34_a_38">34 a 38 anos</label>
                                            </div>

                                            <div class="input-field col s12 m12 l8 faixa_etaria">
                                                <input id="faixa_39_a_43" name="faixa_39_a_43" type="text" title="Insira a quantidade de usuário que possui a idade entre 39 a 43 anos" class="validate">
                                                <label for="faixa_39_a_43">39 a 43 anos</label>
                                            </div>

                                            <div class="input-field col s12 m12 l8 faixa_etaria">
                                                <input id="faixa_44_a_48" name="faixa_44_a_48" type="text" title="Insira a quantidade de usuário que possui a idade entre 44 a 48 anos" class="validate">
                                                <label for="faixa_44_a_48">44 a 48 anos</label>
                                            </div>

                                            <div class="input-field col s12 m12 l8 faixa_etaria">
                                                <input id="faixa_49_a_53" name="faixa_49_a_53" type="text" title="Insira a quantidade de usuário que possui a idade entre 49 a 53 anos" class="validate">
                                                <label for="faixa_49_a_53">49 a 53 anos</label>
                                            </div>

                                            <div class="input-field col s12 m12 l8 faixa_etaria">
                                                <input id="faixa_54_a_58" name="faixa_54_a_58" type="text" title="Insira a quantidade de usuário que possui a idade entre 54 a 58 anos" class="validate">
                                                <label for="faixa_54_a_58">54 a 58 anos</label>
                                            </div>

                                            <div class="input-field col s12 m12 l8 faixa_etaria">
                                                <input id="faixa_59_ou_mais" name="faixa_59_ou_mais" type="text" title="Insira a quantidade de usuário que possui a idade entre 59 anos ou +" class="validate">
                                                <label for="faixa_59_ou_mais">59 anos ou +</label>
                                            </div>
                                        </div>
                                        <!-- ./faixa etária -->

                                        <div class="row">
                                            <div class="col s12 left-align">
                                                <button type="submit" class="waves-effect waves-light btn">Enviar</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>



                                

                            </div>
                        </div>
                    </div>
                    <!-- ./formulario -->

                    <!-- acesso rapido -->
                    <div class="col s12 m12 l4">                                             
                        <div class="card z-depth-4 ">
                            <div class="card-content  cyan lighten-5" id="divContent_acesso">
                                <h5 class="center-align"><strong>Consultoria em planos de Saúde</strong></h5>
                                <p class="center-align">A sua melhor escolha! </p>
                            </div>

                            <!-- div card convenio -->
                            <div class="card-action col s12 m12 l12" id="divAction_convenio">
                                <div class="row" >
                                    <div class="col s12 m6 l12 divImage_convenio" id="divImage_convenio_amil">
                                        <div class="card-image center-align z-depth-1" >
                                            <img class="responsive-img" id="img_convenio" src=<?= base_url("img/logo_convenio/amil.png") ?>>
                                        </div>
                                    </div>

                                    <div class="col s12 m6 l12 divImage_convenio" id="divImage_convenio_dix">
                                        <div class="card-image center-align z-depth-1" >
                                            <img class="responsive-img" id="img_convenio" src=<?= base_url("img/logo_convenio/dix.jpg") ?>>
                                        </div>
                                    </div>

                                    <div class="col s12 m6 l12 divImage_convenio"  id="divImage_convenio_unimed">
                                        <div class="card-image center-align z-depth-1">
                                            <img class="responsive-img" id="img_convenio" src=<?= base_url("img/logo_convenio/unimed.png") ?>>
                                        </div>
                                    </div>

                                    <div class="col s12 m6 l12 divImage_convenio" id="divImage_convenio_unifocus">
                                        <div class="card-image center-align z-depth-1">
                                            <img class="responsive-img" id="img_convenio" src=<?= base_url("img/logo_convenio/unifocus.jpg") ?>>
                                        </div>
                                    </div>

                                    <div class="col s12 m6 l12 divImage_convenio" id="divImage_convenio_golden">
                                        <div class="card-image center-align z-depth-1">
                                            <img class="responsive-img" id="img_convenio" src=<?= base_url("img/logo_convenio/golden.png") ?>>
                                        </div>
                                    </div>

                                    <div class="col s12 m6 l12 divImage_convenio" id="divImage_convenio_qualic">
                                        <div class="card-image center-align z-depth-1">
                                            <img class="responsive-img" id="img_convenio" src=<?= base_url("img/logo_convenio/qualicorp.jpg") ?>>
                                        </div>
                                    </div>

                                    <div class="col s12 m6 l12 divImage_convenio" id="divImage_convenio_bradesco">
                                        <div class="card-image center-align z-depth-1">
                                            <img class="responsive-img" id="img_convenio" src=<?= base_url("img/logo_convenio/Bradesco-Saúde.png") ?>>
                                        </div>
                                    </div>

                                    <div class="col s12 m6 l12 divImage_convenio" id="divImage_convenio_sul">
                                        <div class="card-image center-align z-depth-1">
                                            <img class="responsive-img" id="img_convenio" src=<?= base_url("img/logo_convenio/sul_america.png") ?>>
                                        </div>
                                    </div>

                                    <div class="col s12 offset-m3 m6 l12 divImage_convenio" id="divImage_convenio_assim">
                                        <div class="card-image center-align z-depth-1">
                                            <img class="responsive-img" id="img_convenio" src=<?= base_url("img/logo_convenio/assim.png") ?>>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!-- ./div card convenio -->

                            <!-- div card contato -->
                            <div class="card-panel col s12 m12 l12 blue darken-3" id="divPanel_contato">
                                <div>
                                    <p class="center-align white-text">
                                        <strong>Contatos</strong>
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col offset-s3  s12  col offset-m4 m12 l9">
                                        <span class="white-text">
                                            <i id="iconContato_rodape" class="material-icons white-text">phone</i>
                                            <?=$corretor['telefone']?>
                                        </span>
                                    </div >
                                </div>

                                <div class="row">
                                    <div class="col offset-s3  s12  col offset-m4 m12 l9">
                                        <span class="white-text">
                                            <i id="iconContato_rodape" class="material-icons white-text">stay_current_portrait</i>
                                            <?=$corretor['celular']?>
                                        </span>
                                        <img id="imgWattsApp_rodape" src=<?= base_url("img/redeSocial/whatsapp.png") ?>>
                                    </div >
                                </div>

                                <div class="row">
                                    <div class="col offset-s3  s12  col offset-m4 m12 l9">
                                        <span class="white-text">
                                            <i id="iconContato_rodape" class="material-icons white-text">email</i>
                                            <?=$corretor['email']?></span>
                                    </div >
                                </div>

                            </div>
                            <!-- ./div card contato -->
                        </div>

                    </div>
                </div>
                <!-- ./acesso rapido -->
            </div>
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
