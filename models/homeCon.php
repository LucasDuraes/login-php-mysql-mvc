<?php
require_once 'conexao.php';

class homeCon{

    private $con;

    public function __construct(){
        $this->con = conexao::getConexao();
    }

    public function getUsuarios($nomeUser, $senhaUser){
        $dados = array();
        $cmd = $this->con->prepare('SELECT `usuario`, `nome`, `nivel`, `ativo`, `email` FROM `registro-login` WHERE `usuario`=:nu AND `senha`=:su;');
        $cmd->bindvalue(':nu', $nomeUser);
        $cmd->bindvalue(':su', $senhaUser);
        $cmd->execute();
        $dados = $cmd->fetch(PDO::FETCH_ASSOC);
        if (isset($dados) && !empty($dados)) {
            return $dados;
        }else {
            return false;
        }
    }

    public function getRegistros($nomeUser, $email){
        $dados = array();
        $cmd = $this->con->prepare('SELECT `usuario`, `email` FROM `registro-login` WHERE `usuario`=:nu || `email`=:em;');
        $cmd->bindvalue(':nu', $nomeUser);
        $cmd->bindvalue(':em', $email);
        $cmd->execute();
        $dados = $cmd->fetch(PDO::FETCH_ASSOC);
        if (isset($dados) && !empty($dados)) {
            return false;
        }else {
            return true;
        }
    }

    public function testarNomeUser($nomeUserTeste){
        $dados = array();
        $cmd = $this->con->prepare('SELECT `usuario`, `nome` FROM `registro-login` WHERE `usuario`=:nu;');
        $cmd->bindvalue(':nu', $nomeUserTeste);
        $cmd->execute();
        $dados = $cmd->fetch(PDO::FETCH_ASSOC);
        if (isset($dados) && !empty($dados)) {
            return true;
        }else {
            return false;
        }
    }

    public function criarRegistro($nomeUsuarioRE, $nomeRE, $sobrenomeRE, $dataNascimentoRE, $emailRE, $senhaRE) {
        $cmd = $this->con->prepare("INSERT INTO `registro-login` (usuario, nome, sobrenome, nascimento, ativo, nivel, email, senha, cadastro) VALUES (:nu, :nm, :sm, :nc, '1', '1', :em, :se, NOW( ));");
        $cmd->bindvalue(':nu',$nomeUsuarioRE);
        $cmd->bindvalue(':nm',$nomeRE);
        $cmd->bindvalue(':sm',$sobrenomeRE);
        $cmd->bindvalue(':nc',$dataNascimentoRE);
        $cmd->bindvalue(':em',$emailRE);
        $cmd->bindvalue(':se',$senhaRE);
        $cmd->execute();
    }
}