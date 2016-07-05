<?php include("cabecalho.php")
?>


<section class="sessao_cadastroCorretor" style="margin-top: 90px; text-align: center;" >
    <div class="container">

        <table class="table table-bordered">
            <thead>
                <tr class="info" >
                    <th style="text-align: center">Id</th>
                    <th style="text-align: center">Produto</th>
                    <th style="text-align: center">Imagem</th>
                    <th style="text-align: center">Posição</th>
                    <th colspan="3" style="text-align: center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $produto) : ?>
                    <tr>
                        <td><?= $produto["id"] ?></td>
                        <td><?= $produto["titulo"] ?></td>
                        <td><img style="height: 20px; width: 60px" src="<?= base_url("img/logo_convenio") . '/' . $produto["nome_arquivo"] ?>"></td>

                        <td id="status<?= $produto["id"] ?>" class="scp_coluna">

                            <?= $produto["status"] ?>

                        </td>

                        <td style="width: 50px;">
                            <input <?= $produto["status"] == 0 ? "" : "disabled='disabled'" ?>
                                type="number"  
                                value="<?= $produto['ordem'] ?>" 
                                id="ordem<?= $produto["id"] ?>" 
                                name="ordem" 
                                class="form-control" size="5" style="width: 50px;">
                        </td>
                        <td>
                            <a href="<?= base_url("/index.php/produto/prealterar?id=" . $produto["id"]) ?>" class="btn btn-warning" role="button">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                Atualizar
                            </a>
                        </td>

                        <td>
                            <a id="btn<?= $produto["id"] ?>" itemid= "<?= base_url("/index.php/produto/ativar?id=" . $produto["id"]) ?>"  
                               class="scp_btn btn <?= $produto["status"] == 0 ? "btn-primary" : "btn-success" ?>" role="button">
                                   <?= $produto["status"] == 0 ? "Ativar" : "Desativar" ?>
                            </a>
                        </td>

                        <td>
                            <a href="<?= base_url("/index.php/produto/deletar?id=" . $produto["id"]) ?>" class="btn btn-danger" role="button">
                                Excluir
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>  
        </table>

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




