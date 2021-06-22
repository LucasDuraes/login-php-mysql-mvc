<?php

class calculadoraController extends controller{

    const pasta = "viewCalculadora/";

    public function index(){
        session_start();
        if (!isset($_SESSION['nivel']) && empty($_SESSION['nivel'])) {
            header('Location: http://localhost/login-php-mysql-mvc/inicio');
        }
        $nomeView = self::pasta."calculadora";
        $this->carregarTemplate($nomeView);
    }

}