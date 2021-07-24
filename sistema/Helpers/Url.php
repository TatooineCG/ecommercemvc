<?php

class Url {
    public static function Redirecionar($url){
        header("Location:".URL.DIRECTORY_SEPARATOR.$url, );
    }
}