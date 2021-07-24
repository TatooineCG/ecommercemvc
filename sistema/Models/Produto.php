<?php

class Produto{
    public function __construct()
    {
       $this->db = new Database();
    }

    public function lerProdutos(){
        $this->db->query("SELECT *, produtos.id as produtosID, produtos.criado_em as produtosDataCadastro, usuarios.id as usuariosId, usuarios.criado_em as usuariosDataCadastro 
        FROM produtos
        INNER JOIN usuarios ON
        produtos.usuario_id = usuarios.id
         ORDER BY produtos.id DESC
         ");
        return $this->db->resultados();
    }
    

    public function armazenar($dados){
        $this->db->query("INSERT INTO produtos(usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");
        
        $this->db->bind("usuario_id",$dados['usuario_id']);
        $this->db->bind("titulo",$dados['titulo']);
        $this->db->bind("texto",$dados['texto']);

        if($this->db->executar()):
            return true;
        else:
            return false;
        endif;        
    }

    public function lerProdutosPorId($id){
        $this->db->query("SELECT * FROM produtos WHERE id = :id");
        $this->db->bind('id', $id);

        if($this->db->executar()):
            return true;
        else:
            return false;
        endif;   
    }
    
}