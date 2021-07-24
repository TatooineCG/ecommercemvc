<link rel="stylesheet" href="<?= URL ?>/public/css/login.css">
<link rel="stylesheet" href="<?= URL ?>/public/css/login.min.css">
<div class="container-fluid container-fluid-login">
    <div class="row">
        <div class="container">
            <div class="col-12 col-md-12">

                <div class="col-xl-4 col-md-6 mx-auto p-5">

                    <div class="card">
   
                        <div class="card-body">
                            <h2>Entre</h2>
                            <small>Faça o login com seu email e senha.</small>

                            <form name="cadastrar" method="POST" action="">
                                <div class="form-group">
                                    <?= Sessao::mensagem('usuario') ?>
                                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                                    <input type="email" name="email" id="email" value="<?= $dados['email'] ?>" class="form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>">
                                    <div class="invalid-feedback">
                                        <?= $dados['email_erro'] ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                                    <input type="password" name="senha" id="senha" class="form-control <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>">
                                    <div class="invalid-feedback">
                                        <?= $dados['senha_erro'] ?>
                                    </div>
                                </div>
                        </div>


                        <div class="row d-flex">
                            <div class="col-md-5 pr-3 ml-3 pl-3">
                                <input type="submit" value="Entrar" class="btn btn-info btn-block">
                            </div>
                            <div class="col-md-6 pb-3 mb-1 pl-1 mr-0">
                                <a href="<?= URL ?>/Usuarios/cadastrar">Você não tem uma conta? Cadastre-se</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <img src="<?= URL ?>/img/presente.gif" class="img-fluid img-fluid-gif" alt="">
            </div>
        </div>
    </div>
</div>
</div>