<?php

class Paginas extends Controller {

    public function index(){
        if(!Sessao::Logado()) : 
            Url::Redirecionar('usuarios/login');
        endif;
        $dados = [
            'tituloPagina' => 'Página Inicial'
        ];

        $this->view('paginas/home', $dados);
    }

    public function sobre(){
        $dados = [
            'tituloPagina' => APP_NOME
        ];

        $this->view('paginas/sobre', $dados);
    }
    
}