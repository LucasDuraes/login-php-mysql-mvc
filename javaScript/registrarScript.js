function validarDadosRegistro() {
    var nomeUsuario = document.getElementById('nomeUsuario').value
    var nome = document.getElementById('nome').value
    var sobrenome = document.getElementById('sobrenome').value
    var dataNascimento = document.getElementById('dataNascimento').value
    var email = document.getElementById('email').value
    var senha = document.getElementById('senha').value
    var comfirmaSenha = document.getElementById('comfirmaSenha').value
    
    if (nomeUsuario == '') {
        alert('Informe algum nome de usuário!')
        document.getElementById('nomeUsuario').focus()
        return false
    }

    if (length(nomeUsuario) > 100) {
        alert('O nome de usuario deve possuir menos que 100 caracteres!')
        document.getElementById('nomeUsuario').focus()
        return false
    }

    if (nome == '') {
        alert('Informe o seu nome!')
        document.getElementById('nome').focus()
        return false
    }

    if (length(nome) > 50) {
        alert('Seu nome deve possuir menos de 50 caracteres')
        document.getElementById('nomeUsuario').focus()
        return false
    }

    if (sobrenome == '') {
        alert('Informe o seu sobrenome!')
        document.getElementById('sobrenome').focus()
        return false
    }

    if (length(sobrenome) > 50) {
        alert('Seu sobrenome deve possuir menos de 50 caracteres')
        document.getElementById('nomeUsuario').focus()
        return false
    }

    if (dataNascimento == '' | dataNascimento < '1850-12-31') {
        alert('Informe uma data de nascimento valida!')
        document.getElementById('dataNascimento').focus()
        return false
    }

    if (email == '') {
        alert('Informe um email!')
        document.getElementById('email').focus()
        return false
    }

    if (length(email) > 100) {
        alert('Seu email deve possuir menos de 100 caracteres')
        document.getElementById('nomeUsuario').focus()
        return false
    }

    if (senha == '') {
        alert('Crie uma senha!')
        document.getElementById('senha').focus()
        return false
    }

    if (comfirmaSenha == '' | senha != comfirmaSenha) {
        alert('Senha diferente!')
        document.getElementById('comfirmaSenha').focus()
        return false
    }
}