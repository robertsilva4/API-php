<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <?php
    include_once("templates/nav.php");
    ?>
    <div class="container">

        <form class="form-group col-11">
            <div class="form-row">
                <div class="col">
                    <label class="mt-5" for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome">
                    <p class="campoError" id="nomeError"></p>
                </div>
                <div class="col">
                    <label class="mt-5" for="email">E-mail:</label>
                    <input class="form-control" type="email" name="email" id="email">
                    <p class="campoError" id="emilError"></p>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label class="mt-3" for="senha">Senha:</label>
                    <input class="form-control" type="password" name="senha" id="senha">
                    <p class="campoError" id="senhaError"></p>
                </div>
                <div class="col">
                    <label class="mt-3" for="confirmSenha">Confirma Senha:</label>
                    <input class="form-control" type="password" name="confirmSenha" id="confirmSenha">
                    <p class="campoError" id="verifySenhaError"></p>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label class="mt-3" for="cep">CEP:</label>
                    <input class="form-control" type="text" name="cep" id="cep">
                    <p class="campoError" id="cepError"></p>
                </div>
                <div class="col">
                    <label class="mt-3" for="cidade">Cidade:</label>
                    <input class="form-control" type="text" name="cidade" id="cidade">
                    <p class="campoError" id="cidadeError"></p>
                </div>
                <div class="col">
                    <label class="mt-3" for="bairro">Bairro:</label>
                    <input class="form-control" type="text" name="bairro" id="bairro">
                    <p class="campoError" id="bairroError"></p>
                </div>
                <div class="col-2">
                    <label class="mt-3" for="estado">Estado:</label>
                    <select class="form-control" name="estado" id="estado">
                        <option value="" selected>Selecione</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AM">AM</option>
                        <option value="AP">AP</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MG">MG</option>
                        <option value="MS">MS</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                    <p class="campoError" id="estadoError"></p>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label class="mt-3" for="rua">Rua:</label>
                    <input class="form-control" type="text" name="rua" id="rua">
                    <p class="campoError" id="ruaError"></p>
                </div>
                <div class="col-2">
                    <label class="mt-3" for="numero">Número:</label>
                    <input class="form-control" type="text" name="numero" id="numero">
                    <p class="campoError" id="numeroError"></p>
                </div>
                <div class="col-2">
                    <label class="mt-3" for="complemento">Complemento:</label>
                    <input class="form-control" type="text" name="complemento" id="complemento">
                    <p class="campoError" id="complementoError"></p>
                </div>
                <div class="col-2">
                    <label class="mt-3" for="tipo">Tipo:</label>
                    <select class="form-control" name="tipo" id="tipo">
                        <option value="1" selected>Cliente</option>
                        <option value="2">Vendedor</option>
                    </select>
                </div>
            </div>

            <button href="javascript:void(0)" class="btn btn-success mt-4 float-right" type="button" id="cadastro">Cadastrar</button>

        </form>
        <?php
        include_once("templates/carrinho.php")
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="js/cadastro.js"></script>
    <script src="js/produtos.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>