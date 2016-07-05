<?php if ($this->session->flashdata("erro")) : ?>
    <h4 class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        <?= $this->session->flashdata("erro") ?>
    </h4>
<?php endif ?>

<?php if ($this->session->flashdata("sucesso")) : ?>
    <h4 class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        <?= $this->session->flashdata("sucesso") ?>
    </h4>
    <?php
 endif ?>