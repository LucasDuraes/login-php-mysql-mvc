var conta = '';
var ultimoResultado = '';

var textohtml = document.getElementById('displayResultado');
 
function escreva(param) {
    conta = conta + param;
    document.getElementById('displayResultado').innerHTML = conta;
}

function limpa() {
    conta = '';
    document.getElementById('displayResultado').innerHTML = conta;
}

function limpaUm() {
    conta = conta.substring(0, conta.length -1) ;
    document.getElementById('displayResultado').innerHTML = conta;
}

function calc() {
    conta = eval(conta);
    document.getElementById('displayResultado').innerHTML = conta;
    ultimoResultado = conta;
}