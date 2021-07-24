<?php

class Controller{
    
    public function Model($model){
        require_once '../sistema/Models/'.$model.'.php';
        return new $model;
    }

    public function View($view, $dados = []){
        $arquivos = ('../sistema/Views/'.$view.'.php');
        if(file_exists($arquivos)){
            require_once $arquivos;
        }
        else{
            die('O arquivo de visualização não existe.');
        }
    }
}