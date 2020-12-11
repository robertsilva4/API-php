const BASE_URL = "http://localhost/trabalhos/API-php/backend/";

function setCep() {
    var xhr = new XMLHttpRequest()
    xhr.open('GET', 'https://viacep.com.br/ws/' + cep.value + '/json/')
    xhr.send()

    xhr.onload = () => {
        var enderecos = JSON.parse(xhr.responseText)

        rua.value = enderecos.logradouro
        bairro.value = enderecos.bairro
        cidade.value = enderecos.localidade
        estado.value = enderecos.uf

        localStorage.setItem('enderecos', JSON.stringify(enderecos))
    }
}


function consultaCep() {
    if (localStorage.hasOwnProperty('enderecos')) {
        var enderecos = JSON.parse(localStorage.getItem('enderecos'))
        var cepLimpo = enderecos.cep.replace(/\.|\-/g, '')
        if (cep.value == cepLimpo) {
            rua.value = enderecos.logradouro
            bairro.value = enderecos.bairro
            cidade.value = enderecos.localidade
            estado.value = enderecos.uf
        } else {
            setCep()
        }
    } else {
        setCep()
    }

}

cep.addEventListener("input", function() {
    var cepreplace = cep.value.replace(/\.|\-/g, '');
    var cepLimpo = cepreplace.length
    if (cepLimpo == 8) {
        consultaCep()
    }
})

function cadastrar() {
    if (isValidForm()) {

        if (tipo.value == 1) {
            let tipo = "clientes";
            let nomeInput = nome.value
            let emailInput = email.value
            let senhainput = senha.value
            let cepInput = cep.value
            let cidadeInput = cidade.value
            let bairroInput = bairro.value
            let estadoInput = estado.value
            let ruaInput = rua.value
            let numeroInput = numero.value
            let complementoInput = complemento.value


            fetch(BASE_URL + tipo, {
                    method: "POST",
                    body: JSON.stringify({
                        "nome": nomeInput,
                        "email": emailInput,
                        "senha": senhainput,
                        "cep": cepInput,
                        "cidade": cidadeInput,
                        "bairro": bairroInput,
                        "estado": estadoInput,
                        "rua": ruaInput,
                        "numero": numeroInput,
                        "complemento": complementoInput
                    }),
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    }
                }).then(response => response.json())
                .then(json => retorno(json))
        } else {
            let tipo = "usuarios"
            let nomeInput = nome.value
            let emailInput = email.value
            let senhainput = senha.value
            let cepInput = cep.value
            let cidadeInput = cidade.value
            let bairroInput = bairro.value
            let estadoInput = estado.value
            let ruaInput = rua.value
            let numeroInput = numero.value
            let complementoInput = complemento.value


            fetch(BASE_URL + tipo, {
                    method: "POST",
                    body: JSON.stringify({
                        "nome": nomeInput,
                        "email": emailInput,
                        "senha": senhainput,
                        "cep": cepInput,
                        "cidade": cidadeInput,
                        "bairro": bairroInput,
                        "estado": estadoInput,
                        "rua": ruaInput,
                        "numero": numeroInput,
                        "complemento": complementoInput
                    }),
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    }
                }).then(response => response.json())
                .then(json => console.log(json))
        }


    }

}

function retorno(ret) {
    console.log(ret)
    if (ret.status == "success") {
        alert("Dados Cadastrado com Sucesso!!")
        location.href = "home.php";
    } else if (ret.status == "error") {
        alert(ret.data)
    }
}

function isValidForm() {

    let existsError = true;

    if (nome.value == "") {
        $("#nome").addClass("border border-danger");
        document.getElementById("nomeError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#nome").removeClass("border border-danger");
        document.getElementById("nomeError").innerHTML = ''
    }

    if (email.value == "") {
        $("#email").addClass("border border-danger");
        document.getElementById("emilError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#email").removeClass("border border-danger");
        document.getElementById("emilError").innerHTML = ''
    }

    if (senha.value == "") {
        $("#senha").addClass("border border-danger");
        document.getElementById("senhaError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#senha").removeClass("border border-danger");
        document.getElementById("senhaError").innerHTML = ''
    }

    if (confirmSenha.value == "") {
        $("#confirmSenha").addClass("border border-danger");
        document.getElementById("verifySenhaError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#confirmSenha").removeClass("border border-danger");
        document.getElementById("verifySenhaError").innerHTML = ''
    }

    if (cep.value == "") {
        $("#cep").addClass("border border-danger");
        document.getElementById("cepError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#cep").removeClass("border border-danger");
        document.getElementById("cepError").innerHTML = ''
    }
    if (bairro.value == "") {
        $("#bairro").addClass("border border-danger");
        document.getElementById("bairroError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#bairro").removeClass("border border-danger");
        document.getElementById("bairroError").innerHTML = ''
    }

    if (cidade.value == "") {
        $("#cidade").addClass("border border-danger");
        document.getElementById("cidadeError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#cidade").removeClass("border border-danger");
        document.getElementById("cidadeError").innerHTML = ''
    }

    if (estado.value == "") {
        $("#estado").addClass("border border-danger");
        document.getElementById("estadoError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#estado").removeClass("border border-danger");
        document.getElementById("estadoError").innerHTML = ''
    }

    if (rua.value == "") {
        $("#rua").addClass("border border-danger");
        document.getElementById("ruaError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#rua").removeClass("border border-danger");
        document.getElementById("ruaError").innerHTML = ''
    }

    if (numero.value == "") {
        $("#numero").addClass("border border-danger");
        document.getElementById("numeroError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#numero").removeClass("border border-danger");
        document.getElementById("numeroError").innerHTML = ''
    }

    if (complemento.value == "") {
        $("#complemento").addClass("border border-danger");
        document.getElementById("complementoError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#complemento").removeClass("border border-danger");
        document.getElementById("complementoError").innerHTML = ''
    }

    return existsError;
}


cadastro.addEventListener("click", function() {
    cadastrar()
})