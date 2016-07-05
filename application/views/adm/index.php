
 <?php if($this->session->userdata("usuario_logado")) : ?>
    <?php include("cabecalho.php")?>
 <?php endif ?>
<section style="margin-top: 30vh; text-align: center; ">
    <div class="container">
        <div class="row">
            <h1>Seja Bem Vindo!</h1>
            <?=$mensagem?>
        </div>
    </div>
</section>


 <?php include("cabecalho.php")?>