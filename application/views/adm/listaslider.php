<?php include("cabecalho.php")
?>


<section class="sessao_cadastroCorretor" style="margin-top: 90px; text-align: center;" >
    <div class="container">

        <table class="table table-bordered table-responsive">
            <thead>
                <tr class="info" >
                    <th style="text-align: center">Id</th>
                    <th style="text-align: center">Titulo</th>
                    <th style="text-align: center">Imagem</th>
                    <th style="text-align: center">Descrição</th>
                    <th colspan="3" style="text-align: center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($slider as $obj_slider) : ?>
                    <tr>
                        <td><?= $obj_slider["id"] ?></td>
                        <td><?= $obj_slider["titulo"] ?></td>
                        <td><img style="height: 60px; width: 180px" src="<?= base_url("img/slider") . '/' . $obj_slider["nome_arquivo"] ?>"></td>

                       <td><?= $obj_slider["descricao"] ?></td>

                        
                        <td>
                            <a href="<?= base_url("/index.php/slider/prealterar?id=" . $obj_slider["id"]) ?>" class="btn btn-warning" role="button">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                Atualizar
                            </a>
                        </td>

                      
                    </tr>
                <?php endforeach ?>
            </tbody>  
        </table>

    </div>
</section>

<!-- rodape -->
<footer class="footer">
   
        Todos os Direitos Reservados a <strong>RS Soluções</strong>
 </footer>
<!-- ./rodape -->

<?php include("rodape.php") ?>




