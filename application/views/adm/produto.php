<?php include("cabecalho.php")
?>


<section class="sessao_cadastroCorretor" style="margin-top: 90px; text-align: center;" >
    <div class="container">
        <form id="formUpload" method="post" action="../produto/salvar" enctype="multipart/form-data">
            <div class="row">

                <div class="panel panel-success">
                    <div class="panel-heading"><h3 class="panel-title">Cadastro de Produtos</h3></div><!-- Panel cabeçalho -->

                    <input type="hidden" size="80" value="<?= $produto['id'] ?>" name="id"/>

                    <div class="panel-body">
                        <div class="row  form-group">
                            <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                <label class="control-label" for="titulo" >Titulo</label>
                            </div>
                            <div class="col-xs-9 col-sm-10 col-md-10">
                                <input class="form-control" value="<?= $produto['titulo'] ?>" type="text" id="titulo" name="titulo"/>
                            </div>
                        </div>

                        <div class="row  form-group">
                            <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                <label class="control-label" for="descricao" >Descrição</label>
                            </div>
                            <div class="col-xs-9 col-sm-10 col-md-10">
                                <input type="text" value="<?= $produto['descricao'] ?>" class="form-control" id="titulobiografia" name="descricao"/>
                            </div>
                        </div>

                        <div class="row  form-group">
                            <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                <label class="control-label" for="imagem" >Imagem</label>
                            </div>
                            <div class="col-xs-9 col-sm-10 col-md-10">
                                <select id="imagens_id" name="imagens_id" class="form-control" selectedIndex="<?= $produto['imagens_id'] ?>" >
                                    <?php foreach ($imagens as $value): ?>
                                    <option <?php echo ($value['id'] === $produto['imagens_id'])?'selected':'' ?> value="<?= $value['id'] ?>"> <?= $value['nome'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2">
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Salvar" />
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>

<!-- rodape -->
<footer>
    <div class="footer">
        Todos os Direitos Reservados a <strong>RS Soluções</strong>
    </div>
</footer>
<!-- ./rodape -->

<?php include("rodape.php") ?>




