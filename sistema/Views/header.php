<link rel="stylesheet" href="<?= URL ?>/public/css/header.css">
<link rel="stylesheet" href="<?= URL ?>/public/css/header.min.css">

<div class="container-fluid fluid-container-header">
    <div class="row  bg-info">
        
        <div class="container container-header">
        <div class="col-12 col-md-4">
                <h2 class="text mt-3">
                    <a href="<?=URL?>/index">LOGO</a>
                </h2>
            </div>
            <div class="col-12 col-md-6 pb-2 float-right col-header">       
                         
                <?php
                if (isset($_SESSION['usuario_id'])) : ?>
                    <p class="bem-vindo float-end text-light">Olá, <b><?= $_SESSION['usuario_nome'] ?></b> tudo bem?</p> <a class="btn float-end btn-danger btn-sm btn-sair" href="<?= URL ?>/usuarios/sair">Sair</a>

                <?php else : ?>
                    <a class="btn btn-light btn-sm mx-2 " href="<?= URL ?>/Usuarios/cadastrar">Cadastre-se</a>
                    <a class="btn btn-light btn-sm " href="<?= URL ?>/Usuarios/login">Entre</a>
                <?php endif; ?>

            </div>
        </div>
    </div>