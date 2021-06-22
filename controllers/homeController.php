<?php

class homeController extends controller{

    public function index(){
        $this->carregarTemplate('inicio');
    }

    public function logar(){
        $this->carregarTemplate('logar');
    }

    public function verificarLogin($nomeUsuario, $senhaUsuario){
        $ban = new homecon;
        $dados = $ban->getUsuarios($nomeUsuario, $senhaUsuario);
        return $dados;
    }

    #------------------------------------------
    public function sair(){
            $this->carregarTemplate('sair');
    }
    #------------------------------------------

    public function criarConta(){
        $this->carregarTemplate('registrar-se');
    }

    public function RegistrarUsuario($nomeUsuarioRE, $nomeRE, $sobrenomeRE, $dataNascimentoRE, $emailRE, $senhaRE){
        $ban = new homecon;
        $dados = $ban->getRegistros($nomeUsuarioRE, $emailRE);//Verificar se o usuario ja esta registrado no banco
        if ($dados == false) {
            $testeNomeUser = $ban->testarNomeUser($nomeUsuarioRE);//testar se o nome de usuario ou o email ja esta em uso
            if ($testeNomeUser == true) {
                $retorno = 'Nome de Usuario';
                return $retorno;//caso o nome de usuario ja exista isso sera retornado
            }else{
                $retorno = 'E-mail';
                return $retorno;//caso o email ja exista isso sera retornado
            }
        }else {
            //essa e a parte que deve registrar o usuario na banco de dados.
            $criandoRegistro = $ban->criarRegistro($nomeUsuarioRE, $nomeRE, $sobrenomeRE, $dataNascimentoRE, $emailRE, $senhaRE);

            return true;
        }
    }

    public function exibirNoticias(){

        $n = new noticiasCon();
        $dadosPag = $n->getTipos();
        $this->carregarTemplate('noticias', array(), $dadosPag);
        
    }
}