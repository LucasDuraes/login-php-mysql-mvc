<?php 
require_once 'conexao.php';

class noticiasCon{

    private $con;

    public function __construct(){
        $this->con = Conexao::getConexao();
    }

    public function getTipos(){
        $dados = array();
        $cmd = $this->con->query('SELECT * FROM tipos_noticia;');
        $dados = $cmd->fetchall(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function getNoticias(){
        $dados = array();
        $cmd = $this->con->query('SELECT n.id_noticia, n.titulo, n.nome_imagem, n.texto, t.descricao FROM noticias n INNER JOIN tipos_noticias t ON n.fk_id_noticia = t.id_tipo;');
        $dados = $cmd->fetchall(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function getNoticiasPorID($id){
        $dados = array();
        $cmd = $this->con->prepare('SELECT n.id_noticia, n.titulo, n.nome_imagem, n.texto, t.descricao FROM noticias n INNER JOIN tipos_noticias t ON n.fk_id_noticia = t.id_tipo WHERE n.id_noticia=:id;');
        $cmd->bindValue(':id',$id);
        $cmd->execute();
        $dados = $cmd->fetch(PDO::FETCH_ASSOC);
        return $dados;
    }
}
