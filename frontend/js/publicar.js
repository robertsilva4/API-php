const BASE_URL = "http://localhost/trabalhos/API-php/backend/";


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

    if (desc.value == "") {
        $("#desc").addClass("border border-danger");
        document.getElementById("descError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#desc").removeClass("border border-danger");
        document.getElementById("descError").innerHTML = ''
    }

    if (valor.value == "") {
        $("#valor").addClass("border border-danger");
        document.getElementById("valorError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#valor").removeClass("border border-danger");
        document.getElementById("valorError").innerHTML = ''
    }

    if (categoria.value == "") {
        $("#categoria").addClass("border border-danger");
        document.getElementById("categoriaError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#categoria").removeClass("border border-danger");
        document.getElementById("categoriaError").innerHTML = ''
    }

    if (imag.value == "") {
        $("#imag").addClass("border border-danger");
        document.getElementById("imagError").innerHTML = 'Campo Obrigatório!!'
        existsError = false
    } else {
        $("#imag").removeClass("border border-danger");
        document.getElementById("imagError").innerHTML = ''
    }

    return existsError;
}


// imag.addEventListener("change", (event) => {
//     const files = event.target.files;

//     for (let file of files) {
//         // const date = new Date(file.lastModified);
//         var imgFile = file.name
//         console.log(`${file}`);
//     }
// })



publicar.addEventListener("click", () => {
    if (isValidForm()) {
        recurso = "produtos"
        fetch(BASE_URL + recurso, {
                method: "POST",
                body: JSON.stringify({
                    "descricao": desc.value,
                    "imagem": imag.value,
                    "valor": valor.value,
                    "datahora": horaAtual.value,
                    "nome": nome.value,
                    "categoria": categoria.value,
                }),
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            }).then(response => response.json())
            .then(json => alert(json.status))
    }
})