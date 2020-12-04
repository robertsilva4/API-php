function validateLogin() {
    var emailValid = email.value
    var senhaValid = senha.value

    // $.ajax({
    //     type: "POST",
    //     url: "acoes_login.php",
    //     data: {
    //         acao: "validEmail",
    //         emailValid: emailValid,
    //         senhaValid: senhaValid
    //     }, // serializes the form's elements.
    //     success: function(data) {
    //         console.log(data);
    //     }
    // });
    $.ajax({

    })


}

btnLogar.addEventListener('click', validateLogin())