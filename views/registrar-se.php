<title>Registrar-Se - MRR-Racing</title>
<link rel="stylesheet" href="http://localhost/login-php-mysql-mvc/formatacao/registrar.css">
<script src="http://localhost/login-php-mysql-mvc/javaScript/registrarScript.js"></script>

<form method="post" class="form-registro">
    <div>
        <label for="nomeUsuario">Nome de Usuário</label>
        <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome de Usuário"  value="<?php if (isset($_POST['nomeUsuario'])) {echo $_POST['nomeUsuario'];} ?>">
    </div>
    <div>
        <label for="nome">Seu Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Seu Nome" value="<?php if (isset($_POST['nome'])) {echo $_POST['nome'];} ?>">
    </div>
    <div>
        <label for="sobrenome">Seu Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Seu Sobrenome" value="<?php if (isset($_POST['sobrenome'])) {echo $_POST['sobrenome'];} ?>">
    </div>
    <div>
        <label for="dataNascimento">Data de Nascimento</label>
        <input type="date" name="dataNascimento" id="dataNascimento" value="<?php if (isset($_POST['dataNascimento'])) {echo $_POST['dataNascimento'];} ?>">
    </div>
    <div>
        <label for="email">Seu E-mail</label>
        <input type="email" name="email" id="email" placeholder="Seu E-mail" value="<?php if (isset($_POST['email'])) {echo $_POST['email'];} ?>">
    </div>
    <div>
        <label for="senha">Digite Sua Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite Sua Senha" value="<?php if (isset($_POST['senha'])) {echo $_POST['senha'];} ?>">
    </div>
    <div>
        <label for="comfirmaSenha">Comfirme Sua Senha</label>
        <input type="password" name="comfirmaSenha" id="comfirmaSenha" placeholder="Comfirme Sua Senha" value="<?php if (isset($_POST['comfirmaSenha'])) {echo $_POST['comfirmaSenha'];} ?>">
    </div>
    <div>
        <label for="registrar">Registrar-Se</label>
        <input type="submit" onclick="return validarDadosRegistro()" value="Registrar-Se" id="registrar">
    </div>
</form>

<?php
    if (isset($_POST['comfirmaSenha'])) {
        
        $nomeUsuario = htmlspecialchars(addslashes($_POST['nomeUsuario']));
        $nome = htmlspecialchars(addslashes($_POST['nome']));
        $sobrenome = htmlspecialchars(addslashes($_POST['sobrenome']));
        $dataNascimento = htmlspecialchars(addslashes($_POST['dataNascimento']));
        $email = htmlspecialchars(addslashes($_POST['email']));
        $senha  = SHA1(htmlspecialchars(addslashes($_POST['senha'])));

        $registro = $this->RegistrarUsuario($nomeUsuario, $nome, $sobrenome, $dataNascimento, $email, $senha);

        if ($registro != 1) {
            ?>
            <style>
                .invalida{max-width: 980px;background-color: red;padding: 20px;margin: 30px auto;text-align: center;}
            </style>
            <div class="invalida">
                <p>O <?php echo $registro ?> já esta em uso!</p>
            </div>
            <?php
        }else {
            $retorno = $this->verificarLogin($nomeUsuario, $senha);
            if ($retorno == true) {
                $_SESSION['usuario'] = $retorno['usuario'];
                $_SESSION['nome'] = $retorno['nome'];
                $_SESSION['ativo'] = $retorno['ativo'];
                $_SESSION['nivel'] = $retorno['nivel'];
                $_SESSION['email'] = $retorno['email'];
                header('Location: http://localhost/login-php-mysql-mvc/inicio');
            }
        }
    }
?>