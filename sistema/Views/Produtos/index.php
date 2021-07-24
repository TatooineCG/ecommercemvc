<div class="container-fluid">
    <div class="row">
        <div class="container ">
            <?= Sessao::mensagem('produto'); ?>
            <div class="col-12 col-md-12 ">

                <button href="" class="btn mx-1 mt-1 mb-1 btn-outline text-light float-right bg-info"><i class="fas fa-edit"></i></button>
                <button href="" class="btn mx-1 mt-1 mb-1 btn-outline text-light float-right bg-info"><i class="fas fa-edit"></i></button>
                <button href="" class="btn mx-1 mt-1 mb-1 btn-outline text-light float-right bg-danger"><i class="fas fa-times"></i></button>
                <button class="btn mx-1 mt-1 mb-1 btn-outline text-light float-right bg-success"><a class="text-white" href="<?= URL ?>/Produtos/cadastrar"><i class="fas fa-plus"></i></a></button>

            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5 mb-3">
                <div class="col">
                    <div class="card h-100">
                        <img src="<?= URL ?>/public/img/p1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <?php foreach ($dados['produtos'] as $produtos) : ?>
                                <h5 class="card-title"><?= $produtos->titulo ?></h5>
                                <p class="card-text"><?= $produtos->texto ?></p>
                                <a href="" class="btn btn-outline-danger">Comprar</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?= $produtos->nome ?> em <?= Checa::checarData($produtos->produtosDataCadastro) ?></small>
                        </div>
                    <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>