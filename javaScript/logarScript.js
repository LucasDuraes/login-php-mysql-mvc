function validarDados() {
    var userName = document.getElementById('nomeUsuario').value
    var userSenha= document.getElementById('senhaUsuario').value

    if (userName == '') {
        alert('Prencha o campo Nome Corretamente!')
        document.getElementById('nomeUsuario').focus()
        return false
    }

    if (userSenha == '') {
        alert('Prencha o campo Senha!')
        document.getElementById('senhaUsuario').focus()
        return false
    }
}