const URL_BASE = "http://localhost/trabalhos/API-php/backend/"

function carregar(produtos) {

    if (produtos.status == "success") {
        html = "";
        produtos.data.forEach(produto => {

            html += `
        <div class="card d-inline-block m-1 col-md-3">
            <div class="prod" href="javascript:void(0)" onclick="showComentarios(` + produto.id + `)">
            <img class="card-img-top" src="img/` + produto.imagem + `" alt="` + produto.nome + `">
            <div class="card-body ">
              <p class="card-text">` + produto.descricao + `</p>
            </div>
            </div>
            <h5 class="card-title">R$ :` + produto.valor + `</h5>
            <div class="form-inline">
            <label class="col-form-label font-weight-bold mr-5" for="quantidade">Quantidade:</label>
            <input class="form-control col-3" type="number" id="quantidade-` + produto.id + `" value="1">
            </div>
            <small class="text-muted">` + produto.datahora + `</small>
            <div class="card-footer">
                <button href="javascript:void(0)" class="btn btn-success" type="button" id="addcarrinho-` + produto.id + `">Adicionar ao Carrinho</button>
                <button href="javascript:void(0)" class="btn btn-danger" type="button" id="comprar-` + produto.id + `">Comprar</button>  
            </div>
        </div>`;
        });

        if (document.getElementById("content")) {
            content.innerHTML = html
        } else if (document.getElementById("destaques")) {
            destaques.innerHTML = html
        }
        produtos.data.forEach(produto => {
            let qtd = document.getElementById("quantidade-" + produto.id)
            let btnCarrinho = document.getElementById("addcarrinho-" + produto.id);
            let btnComprar = document.getElementById("comprar-" + produto.id);

            btnCarrinho.addEventListener("click", () => {
                addCarrinho(produto.id, qtd.value, produto.valor, produto.nome)
                alert("produto adicionado ao carrinho")
            });
            btnComprar.addEventListener("click", () => {
                comprar(produto.id, qtd.value, produto.valor, produto.nome)
            });


        })
    }


}


function descricao(mostrar) {
    html = "";
    mostrar.data.forEach(element => {
        html += `
    <div class="modal-header">
        <h5 class="modal-title" style="margin-right: 15px;">` + element.nome + `</h5>
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
            <img src="img/` + element.imagem + `" class="card-img-top">
            <div class="form-inline mt-2">
            <label class="col-form-label font-weight-bold mr-5" for="quantidade">Quantidade:</label>
            <input class="form-control col-3" type="number" id="quant-` + element.id + `" value="1">
            </div>
            <h4 class="h4 text-center m-3">Comentários</h4>
            <div id="coments"></div>

            <div class="media">
            <div class="form-inline">
                <textarea class="form-control" id="inputcomentario" rows="3" cols="40"></textarea>
                <button href="javascript:void(0)" type="button" id="modalcomentar-` + element.id + `" class="btn btn-primary m-3">Comentar</button>
            </div>
        </div>
            
    </div>
    <div class="modal-footer">
            <button href="javascript:void(0)" type="button" id="modaladdcarrinho-` + element.id + `" class="btn btn-success">Adicionar ao Carrinho</button>
            <button href="javascript:void(0)" type="button" id="modalcomprar-` + element.id + `" class="btn btn-danger">Comprar</button>
    </div>`
    });
    modalContent.innerHTML = html;

    mostrar.data.forEach(element => {
        let qtd = document.getElementById("quant-" + element.id)
        var btnComprar = document.getElementById("modalcomprar-" + element.id)
        var btnCarrinho = document.getElementById("modaladdcarrinho-" + element.id)
        var btnComentar = document.getElementById("modalcomentar-" + element.id)

        btnComprar.addEventListener("click", () => {
            comprar(element.id)
        })

        btnCarrinho.addEventListener("click", () => {
            addCarrinho(element.id, qtd.value, element.valor, element.nome)
            alert("produto adicionado ao carrinho")
        })

        btnComentar.addEventListener("click", () => {
            comentar(element.id)
        })
    });
}

const addCarrinho = (id, qtd, valor, nome) => {
    arrayProdutos = [];

    if (localStorage.hasOwnProperty('produtos')) {
        arrayProdutos = JSON.parse(localStorage.getItem('produtos'))
    }

    produto = {
        id: id,
        nome: nome,
        quantidade: qtd,
        preco: valor,
        total: qtd * valor
    }

    arrayProdutos.push(produto)
    localStorage.setItem('produtos', JSON.stringify(arrayProdutos))
    contcart.innerHTML = arrayProdutos.length
}

function comprar(id) {
    console.log("comprar " + id)
}

function mostrarComentario(comentarios) {
    let html = "";
    if (comentarios.status == "success") {

        comentarios.data.forEach(comentario => {
            html += `
            <div id="linha-` + comentario.id + `" class="media m-3">
                <div class="media-body">
                    <h5 class="mt-0">` + comentario.nome_user + `</h5>
                    <p>` + comentario.comentario + `</p>
                    <small>` + comentario.datahora + `</small>
                    <input type="hidden" id="userComent-` + comentario.user_id + `">`
            if (localStorage.hasOwnProperty("id")) {

                if (localStorage.getItem("id") == comentario.user_id) {
                    html += `<button href="javascript:void(0)" id="deletarComentario-` + comentario.id + `" class="btn btn-danger">Deletar</button>`;
                }

            }
            html += `</div>
            </div>`;
        });
        coments.innerHTML = html

        comentarios.data.forEach(comentario => {
            if (localStorage.getItem("id") == comentario.user_id) {
                var btnDelete = document.getElementById("deletarComentario-" + comentario.id);
                btnDelete.addEventListener("click", () => {
                    deletarComentario(comentario.id)
                })
            }
        })

    } else {

        $("#coments").val("<p>Sem comentarios</p>")
    }
}

const deletarComentario = (id) => {

    fetch(URL_BASE + "comentarios" + "/" + id, {
            method: "DELETE"
        })
        .then(response => {
            if (response.status == 200) {
                document.getElementById("linha-" + id).remove()
            }
            return response.json()
        })
        .then(json => {
            alert(json.data)
        })
}


function comentar(id) {
    let dataHora = horaAtual.value;
    let comentario = inputcomentario.value;
    let itemId = id

    if (localStorage.hasOwnProperty('id')) {
        let userId = localStorage.getItem('id');
        let nome = localStorage.getItem('nome');
        let tipoId = localStorage.getItem('tipo');
        let tipo = ""
        let recurso = "comentarios"
        if (tipoId == 1) {
            tipo = "clientes"
        } else {
            tipo = "vendedor"
        }
        fetch(URL_BASE + recurso, {
                method: "POST",
                body: JSON.stringify({
                    "item_id": itemId,
                    "user_id": userId,
                    "nome_user": nome,
                    "comentario": comentario,
                    "datahora": dataHora,
                    "tipo": tipo
                }),
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(json => {
                if (json.status == "success") {
                    showComentarios(itemId)
                }
            })


    } else {
        let userId = 0;
        let nome = "Anonimo";
        let tipoId = 0;
        let recurso = "comentarios"
        fetch(URL_BASE + recurso, {
                method: "POST",
                body: JSON.stringify({
                    "item_id": itemId,
                    "user_id": userId,
                    "nome_user": nome,
                    "comentario": comentario,
                    "datahora": dataHora,
                    "tipo": tipoId
                }),
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(json => {
                if (json.status == "success") {
                    showComentarios(itemId)
                }
            })
    }
}


function showComentarios(id) {
    let recurso = "produtos"
    let comentario = "comentarios"
    fetch(URL_BASE + recurso + "/" + id)
        .then(response => response.json())
        .then(json => descricao(json))

    fetch(URL_BASE + comentario + "/" + id)
        .then(response => {
            if (response.status == 200) {
                return response.json()
            }
        })
        .then(res => mostrarComentario(res))

    $("#modalComentários").modal("show")

}

function searchProduct(categoria) {
    recurso = "produtos"
    fetch(URL_BASE + recurso + "/" + categoria)
        .then(response => {
            if (response.status == 200) {
                return response.json()
            } else {
                if (document.getElementById("content")) {
                    content.innerHTML = "Registro Não encontrado"
                } else if (document.getElementById("destaques")) {
                    destaques.innerHTML = "Registro Não encontrado"
                }
            }
        })
        .then(json => carregar(json))
}

function modalCart() {
    if (localStorage.hasOwnProperty('produtos')) {

        let arrayProdutos = JSON.parse(localStorage.getItem('produtos'))
        let qtdCarrinho = arrayProdutos.length
        html = ""
        $("#modalCart").modal("show")
        let carrinhoTotal = 0
        arrayProdutos.forEach(produto => {
            carrinhoTotal = produto.total * qtdCarrinho
            html += `
            <div class="form-inline m-3">
            <label for="quant" class="ml-3 mr-2">` + produto.nome + `</label>
            <input name="quant" class="form-control col-2" type="number" value="` + produto.quantidade + `">
            <h5 class="m-3"> R$` + produto.total + `</h5>
            </div>`
        });
        html += `<h3 class="text-right">Total: R$` + carrinhoTotal + `</h3>`

        modalCartContent.innerHTML = html
    } else {
        console.log("sem produtos")
    }
}


function loadCard() {


    if (localStorage.hasOwnProperty("produtos")) {
        arrayProdutos = JSON.parse(localStorage.getItem("produtos"))
        contcart.innerHTML = arrayProdutos.length
    }
    recurso = "produtos"
    fetch(URL_BASE + recurso)
        .then(response => {
            if (response.status == 200) {
                return response.json()
            } else {
                coments.innerHTML = "Sem registro"
            }
        })
        .then(produtos => carregar(produtos));

}
if (document.getElementById("searchProd")) {
    searchProd.addEventListener("click", () => {
        let tipoCategoria = searchCategoria.value;
        searchProduct(tipoCategoria)
    })
}


loadCard()