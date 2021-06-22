<?php

class conexao{
    
    private static $instancia;

    public function __construct(){}

    public static function getConexao(){

        if (!isset(self::$instancia)) {
            $dbname = 'mrr-racing';
            $host   = 'localhost';
            $user   = 'root';
            $senha  = '';

            try {
                self::$instancia = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$senha);
            } catch (\Throwable $th) {
                echo 'Erro: '.$th;
            }
        }
        return self::$instancia;
    }
}