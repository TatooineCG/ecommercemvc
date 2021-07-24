<?php

spl_autoload_register(function($classe){

    $diretorio = [
        'Libraries',
        'Helpers'
    ];

    foreach($diretorio as $diretorios){

        $arquivo = (__DIR__.DIRECTORY_SEPARATOR.$diretorios.DIRECTORY_SEPARATOR.$classe.'.php');
        if(file_exists($arquivo)){
            require_once $arquivo;
        }
    }
});