<?php include("cabecalho.php")
?>


<section class="sessao_cadastroCorretor" style="margin-top: 90px; height: max-content; text-align: center;" >
    <div class="container">
        <form id="formUpload" method="post" action="../slider/alterar" enctype="multipart/form-data">
            <div class="row">

                <div class="panel panel-success">

                    <div class="panel-heading"><h3 class="panel-title">Configuração do Slider</h3></div><!-- Panel cabeçalho -->

                    <input type="hidden" size="80" value="<?= $slider['id'] ?>" name="id"/>

                    <div class="panel-body">

                        <div class="row  form-group">
                            <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                <label class="control-label" for="titulo" >Titulo</label>
                            </div>
                            <div class="col-xs-9 col-sm-10 col-md-10">
                                <input class="form-control" value="<?= $slider['titulo'] ?>" type="text" id="titulo" name="titulo"/>
                            </div>
                        </div>



                        <div class="row  form-group">
                            <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                <label class="control-label" for="descricao" >Descrição</label>
                            </div>
                            <div class="col-xs-9 col-sm-10 col-md-10">
                                <input type="text" value="<?= $slider['descricao'] ?>" class="form-control" id="titulobiografia" name="descricao"/>
                            </div>
                        </div>



                        <div class="row  form-group">
                            <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                <label class="control-label" for="cor_fonte" >Cor do texto</label>
                            </div>
                            <div class="col-xs-9 col-sm-10 col-md-10">
                                <input type="text" value="<?= $slider['cor_fonte'] ?>" class="form-control jscolor" id="cor_fonte" name="cor_fonte"/>
                            </div>
                        </div>



                        <div class="row  form-group">
                            <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                <label class="control-label" for="imagem" >Direção do texto</label>
                            </div>

                            <div class="col-xs-9 col-sm-10 col-md-10">
                                <select id="direcao" name="direcao" class="form-control"  >

                                    <option <?php echo ($slider['direcao'] === 'caption center-align') ? 'selected' : '' ?> value="caption center-align"> De cima para baixo </option>
                                    <option <?php echo ($slider['direcao'] === 'caption left-align') ? 'selected' : '' ?> value="caption left-align"> Da esquerda para direita </option>
                                    <option <?php echo ($slider['direcao'] === 'caption right-align') ? 'selected' : '' ?> value="caption right-align"> Da direita para esquerda </option>
                                    <option <?php echo ($slider['direcao'] === 'caption botton-align') ? 'selected' : '' ?> value="caption botton-align"> Sem Transição </option>

                                </select>

                            </div>
                        </div>




                        <div class="row  form-group">
                            <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                <label class="control-label" for="imagem" >Imagem</label>
                            </div>
                            <div class="col-xs-9 col-sm-10 col-md-10">
                                <select id="img_id" name="img_id" class="form-control" selectedIndex="<?= $slider['img_id'] ?>" >
                                    <?php foreach ($imagens as $value): ?>
                                        <option <?php echo ($value['id'] === $slider['img_id']) ? 'selected' : '' ?> value="<?= $value['id'] ?>"> <?= $value['titulo'] ?> </option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                        </div>



                        <div class="row  form-group">
                           

                            <div class="col-xs-offset-2 col-xs-3  col-sm-offset-2 col-sm-3  col-md-offset-2 col-md-3">
                                <?php foreach ($imagens as $value): ?>
                                    <?php if ($value['id'] === $slider['img_id']): ?>
                                        <img id="<?= 'img_' . $value['id'] ?>" style="height: 120px; width: 250px" src="<?= base_url("img/slider") . '/' . $value["nome_arquivo"] ?>">
                                    <?php endif; ?>

                                    <?php if ($value['id'] !== $slider['img_id']): ?>
                                        <img id="<?= 'img_' . $value['id'] ?>" hidden="" style="height: 120px; width: 250px" src="<?= base_url("img/slider") . '/' . $value["nome_arquivo"] ?>">
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="form-group col-xs-4 col-sm-3 col-md-2">

                    <input type="submit" class="form-control btn btn-primary" value="Salvar" />

                </div>
            </div>




        </form>
    </div>
</section>



<?php include("rodape.php") ?>




