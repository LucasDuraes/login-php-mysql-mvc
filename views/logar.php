<title>Logar - MRR-Racing</title>
<link rel="stylesheet" href="http://localhost/login-php-mysql-mvc/formatacao/logar.css">
<script src="http://localhost/login-php-mysql-mvc/javaScript/logarScript.js"></script>

<form method="post" class="form-logar">
    <h3>Logar</h3>
    <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome de Usuário">
    <input type="password" name="senhaUsuario" id="senhaUsuario" placeholder="Digite sua Senha">
    <input type="submit" onclick="return validarDados()" value="LOGAR">
    <a href="http://localhost/login-php-mysql-mvc/home/criarConta">Ainda não tem conta? Click aqui!</a>
</form>

<?php
    if (isset($_POST['nomeUsuario']) && isset($_POST['senhaUsuario'])) {
        $nomeUsuario = addslashes(htmlspecialchars($_POST['nomeUsuario']));
        $senhaUsuario = SHA1(addslashes(htmlspecialchars($_POST['senhaUsuario'])));
        $retorno = $this->verificarLogin($nomeUsuario, $senhaUsuario);
        if ($retorno == true) {
            $_SESSION['usuario'] = $retorno['usuario'];
            $_SESSION['nome'] = $retorno['nome'];
            $_SESSION['ativo'] = $retorno['ativo'];
            $_SESSION['nivel'] = $retorno['nivel'];
            $_SESSION['email'] = $retorno['email'];
            header('Location: http://localhost/login-php-mysql-mvc/inicio');
        } else {
            ?>
            <style>
                .invalida{width: 410px;background-color: red;padding: 20px;margin: 30px auto;text-align: center;}
            </style>
            <div class="invalida">
                <p>Usuario ou Senha incoretos. Tente Novamente!</p>
            </div>
            <?php
        }
        
    }

?>