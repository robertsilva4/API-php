function validateLogin() {
    var emailValid = email.value
    var senhaValid = senha.value
    var recurso = tipo.value

    if (emailValid != "" && senhaValid != "") {
        $("#email").removeClass('border border-danger');
        $("#senha").removeClass('border border-danger');
        document.getElementById("errorInputEmail").innerHTML = ''
        document.getElementById("errorInputSenha").innerHTML = ''

        $.ajax({
            type: "POST",
            url: "acoes_login.php",
            data: {
                acao: "validemail",
                emailValid: emailValid,
                senhaValid: senhaValid,
                recurso: recurso
            }, // serializes the form's elements.
            success: (data) => {
                console.log(data)
                let id = data.id
                let nome = data.nome
                let tipo = data.tipo
                let error = data.error
                if (error == 0) {
                    localStorage.setItem("id", id);
                    localStorage.setItem("nome", nome);
                    localStorage.setItem("tipo", tipo);
                    alert("Você está logado.");
                    $("#email").removeClass('border border-danger');
                    $("#senha").removeClass('border border-danger');
                    location.href = "home.php";
                } else {
                    alert("Email ou Senha incorreta");
                    $("#email").addClass('border border-danger');
                    $("#senha").addClass('border border-danger');
                }

            }

        }).fail((msg) => {
            if (msg.abort.name == "abort") {
                alert("O email: " + emailValid + " não está cadastrado em nosso sistema.")
            }
        });

    } else {
        if (emailValid == "" && senhaValid != "") {
            $("#email").addClass('border border-danger');
            $("#senha").removeClass('border border-danger');
            document.getElementById("errorInputSenha").innerHTML = ''
            document.getElementById("errorInputEmail").innerHTML = 'Preencha o Campo E-mail'
        } else if (senhaValid == "" && emailValid != "") {
            $("#senha").addClass('border border-danger');
            $("#email").removeClass('border border-danger');
            document.getElementById("errorInputEmail").innerHTML = ''
            document.getElementById("errorInputSenha").innerHTML = 'Preencha o Campo Senha'
        } else {
            $("#email").addClass('border border-danger');
            $("#senha").addClass('border border-danger');
            document.getElementById("errorInputEmail").innerHTML = 'Preencha o Campo E-mail'
            document.getElementById("errorInputSenha").innerHTML = 'Preencha o Campo Senha'
        }

    }



}

btnLogar.addEventListener("click", function() {

    validateLogin();
});