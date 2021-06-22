<?php

class controller{

    public $dadosSessao;
    public $dadosPag;

    public function __contructor(){
        $this->dados = array();
    }

    public function carregarTemplate($nomeView, $dadosModel = array(), $dadosPags = array()){
        $this->dadosSessao = $dadosModel;
        $this->dadosPag = $dadosPags;
        require 'views/template.php';
    }

    public function carregarViewNoTemplate($nomeView, $dadosModel = array()){
        extract($dadosModel);
        require 'views/'.$nomeView.'.php';
    }
}