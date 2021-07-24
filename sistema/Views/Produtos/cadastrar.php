<div class="col-md-10 mx-auto p-5">
    <div class="card">
        <div class="card-body">
            <h2>Tarefas</h2>

            <form name="cadastrar" method="POST" action="<?=URL?>/produtos/cadastrar" class="mt-4">
                    <div class="form-group">
                        <label for="titulo">Título: <sup class="text-danger">*</sup></label>
                        <input type="text" name="titulo" id="titulo" value="<?=$dados['titulo']?>" class="form-control <?=$dados['titulo_erro'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback">
                            <?=$dados['titulo_erro']?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="texto"> Produto: <sup class="text-danger">*</sup></label>
                        <textarea type="text" name="texto" id="texto" class="form-control <?=$dados['texto_erro'] ? 'is-invalid' : '' ?>"></textarea>
                        <div class="invalid-feedback">
                            <?=$dados['texto_erro']?>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="senha">Senha para cadastrar: <sup class="text-danger">*</sup></label>
                        <input type="password" name="senha" id="senha" class="form-control <=$dados['senha_erro'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback">
                            <=$dados['senha_erro']?>
                        </div>
                    </div>                   
                </div> -->

               
                <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
            </form>
        </div>
    </div>
</div>