<?php
    if (!isset($_SESSION['usuario']) && empty($_SESSION['usuario']) && !isset($_SESSION['email']) && empty($_SESSION['email'])) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if (!isset($_SESSION['usuario']) && empty($_SESSION['usuario'])) {
    ?>
        <link rel="stylesheet" href="http://localhost/login-php-mysql-mvc/formatacao/style.css">
    <?php
        }else{
    ?>
        <link rel="stylesheet" href="http://localhost/login-php-mysql-mvc/formatacao/styleLogado.css">
    <?php
        }
    ?>
    <script src="http://localhost/login-php-mysql-mvc/javaScript/templateScript.js"></script>
</head>
<body>
    <!--OpeningHeader-->
    <header class="cabecalho01-header">
        <a class="a-header" href="http://localhost/login-php-mysql-mvc/">LOGO</a>
        <nav id="nav">
            <button aria-label="Abrir Menu" id="btn-mobile" onclick="respondivo()" aria-haspopup="true" aria-controls="menu" aria-expanded="false">MENU
                <span id="hamburger"></span>
            </button>
            <ul class="menu-header">
                <?php
                    if (!isset($_SESSION['usuario']) && empty($_SESSION['usuario'])) {
                ?>
                    <li class="li-header"><a class="a-header" href="http://localhost/login-php-mysql-mvc/home/logar">Logar</a></li>
                    <li class="li-header"><a class="a-header" href="http://localhost/login-php-mysql-mvc/home/criarConta">Registrar-se</a></li>
                    <li class="li-header"><a class="a-header" href="http://localhost/login-php-mysql-mvc/home/exibirNoticias">Noticias</a></li>
                    <li class="li-header"><a class="a-header" href="http://localhost/login-php-mysql-mvc/contato">Contato</a></li>
                <?php
                    }else{
                ?>
                    <li class="li-header"><a class="a-header" href="#">Meu Perfil</a></li>
                    <li class="li-header"><a class="a-header" href="#">Meus Dados</a></li>
                    <li class="li-header"><a class="a-header" href="http://localhost/login-php-mysql-mvc/home/exibirNoticias">Noticias</a></li>
                    <li class="li-header"><a class="a-header" href="http://localhost/login-php-mysql-mvc/contato">Contato</a></li>
                    <li class="li-header" onclick="return comfirmaSaida()"><a class="a-header" href="http://localhost/login-php-mysql-mvc/home/sair">Sair</a></li>
                    <script>
                        function comfirmaSaida() {
                            var comfirmacao = confirm('Tem Certeza que quer sair?')

                            if (comfirmacao == true) {
                                return true
                            }else{
                                return false
                            }
                        }
                    </script>
                <?php
                    }
                ?>
            </ul>
        </nav>
    </header>
    <!--EndHeader-->

    <?php $this->carregarViewNoTemplate($nomeView, $dadosModel) ?>
    
    <!--rodape-->
</body>
</html>