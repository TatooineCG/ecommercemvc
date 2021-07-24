<?php

 class Sessao{

        public static function mensagem($nome, $mensagem = null, $classe = null){
            if(!empty($nome)):

                if(!empty($mensagem) && empty($_SESSION[$nome])):
                    if(!empty($_SESSION[$nome])):
                        unset($_SESSION[$nome]);
                    endif;

                    $_SESSION[$nome] = $mensagem;
                    $_SESSION[$nome.'classe'] = $classe;
                    elseif(!empty($_SESSION[$nome]) && empty($texto)):
                        $classe = !empty($_SESSION[$nome.'classe'] ) ? $_SESSION[$nome.'classe'] : 'alert alert-success';
                        echo '<div class="'.$classe.'">'.$_SESSION[$nome].'</div>';

                        unset($_SESSION[$nome]);
                        unset($_SESSION[$nome.'classe']);
                endif;
            endif;
        }

        public static function Logado(){
            if(isset( $_SESSION['usuario_id'])):
               return true;
               Url::Redirecionar('usuarios/login');
            else:
                return false;
            endif;
        }
 }