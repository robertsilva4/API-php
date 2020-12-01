const URL_BASE = "http://localhost/trabalhos/api/backend/"

function loadCard() {
    recurso = "produtos"
    fetch(URL_BASE + recurso)
        .then(response => response.json())
        .then(produtos =>
            produtos.data.forEach(produto => {
                let html = ''
                html += `<div class="card" id="id-` + produto.id + `">
                <div class="card-header">` + produto.descricao + `</div>
                <div class="card-body">
                <p>` + produto.imagem + `</p>
                <p>` + produto.valor + `</p>
                <p>` + produto.datahora + `</p>
                </div>
                </div>`
                console.log(produto)
                content.innerHTML = html
            }));

}

window.onload = function() {
    loadCard()
}