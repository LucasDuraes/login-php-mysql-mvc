<?php

class noticiasController extends Controller{
    
    public function exibirNoticias(){

        $n = new noticiasCon();
        $dadosPag = $n->getTipos();
        $this->carregarTemplate('noticias', array(), $dadosPag);
        
    }

    public function entretenimento($id_noticia){

        $n = new NoticiasCon();
        $dados = $n->getNoticiasPorID($id_noticia);
        $this->carregarTemplate('noticiaid', array(), $dados);

    }

}