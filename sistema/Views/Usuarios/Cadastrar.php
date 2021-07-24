<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-body">
            <h2>Cadastre-se</h2>
            <small>Preencha o formulário para fazer seu cadastro.</small>

            <form name="cadastrar" method="POST" action="">
                <div class="form-group">
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                    <input type="text" name="nome" id="nome" value="<?=$dados['nome']?>" class="form-control <?=$dados['nome_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?=$dados['nome_erro']?>
                    </div>
                </div>

                    <div class="form-group">
                        <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                        <input type="email" name="email" id="email" value="<?=$dados['email']?>" class="form-control <?=$dados['email_erro'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback">
                            <?=$dados['email_erro']?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                        <input type="password" name="senha" id="senha" class="form-control <?=$dados['senha_erro'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback">
                            <?=$dados['senha_erro']?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmar_senha">Confirme sua senha: <sup class="text-danger">*</sup></label>
                        <input type="password" name="confirmar_senha" id="senha" class="form-control <?=$dados['confirmar_senha_erro'] ? 'is-invalid' : '' ?>">     
                        <div class="invalid-feedback">
                            <?=$dados['confirmar_senha_erro']?>
                        </div>  
                    </div>   
                    <h4></h4> 
                </div>

               
                <div class="row d-flex">
                    <div class="col-md-5 ml-4">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col-md-6 pb-3 mb-1">
                        <a href="<?=URL?>/Usuarios/login">Você tem uma conta? Faça o login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>