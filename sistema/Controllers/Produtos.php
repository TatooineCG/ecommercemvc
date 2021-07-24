<?php

class Produtos extends Controller {

    public function __construct(){
        if(!Sessao::Logado()):
            Url::Redirecionar('usuarios/login');
        else:
            $this->produtoModel = $this->model('Produto');
            
        endif;
    }
    
    public function index()
    {
        $dados = [
            'produtos' => $this->produtoModel->lerProdutos()
        ];

        $this->view('produtos/index', $dados);
    }

    public function cadastrar()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'titulo' => trim($formulario['titulo']),
                'texto' => trim($formulario['texto']),
                'usuario_id' => $_SESSION['usuario_id']
            ];

            if (in_array("", $formulario)) :

                if (empty($formulario['titulo'])) :
                    $dados['titulo_erro'] = 'Preencha o campo nome';
                endif;

                if (empty($formulario['texto'])) :
                    $dados['texto_erro'] = 'Preencha o campo título';
                endif;         
        else :
            
            if ($this->produtoModel->armazenar($dados)) :
                Sessao::mensagem('produto', 'Produto cadastrado com sucesso!.');
                URL::Redirecionar('produtos');
            else :
                die("Erro ao armazenar usuario no banco de dados");
            endif;
    endif;
        else :
            $dados = [
                'titulo' => '',
                'texto' => '',  
                'acerto' => '',
            ];
        endif;
        $this->view('produtos/cadastrar', $dados);
    }

    public function ver($id){
        $dados = [
            'produtos' => $this->produtoModel->lerProdutosPorId($id)
        ];

        
        $this->view('produtos/ver', $dados);
    } 

}