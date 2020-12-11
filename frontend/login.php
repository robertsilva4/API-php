<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <?php
    include_once("templates/nav.php");
    ?>
    <div class="container">
        <form>
            <h1 class="h2 text-center mt-5">Entre ou Cadastre-se</h1>
            <div class="form-group">
                <div class="form-row mt-5">
                    <div class="col">
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control">
                        <p id="errorInputEmail" class="campoError"></p>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" class="form-control">
                        <p id="errorInputSenha" class="campoError"></p>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>

            <fieldset class="form-group">
                <div class="form-row">
                    <div class="col"></div>
                    <legend class="col col-form-label">Você é um Cliente ou Vendedor?</legend>
                    <div class="col"></div>
                </div>
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
                        <select id="tipo" class="form-control mt-2 mb-3">
                            <option value="1" selected>Cliente</option>
                            <option value="2">Vendedor</option>
                        </select>
                    </div>
                    <div class="col"></div>

                </div>
            </fieldset>

            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <a href="cadastro" id="btnCadastrar" class="btn btn-danger">Cadastre-se</a>
                        <a href="javascript:void(0)" id="btnLogar" class="btn btn-primary float-right">Entrar</a>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>

        </form>
        <?php
        include_once("templates/carrinho.php")
        ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="js/login.js"></script>
    <script src="js/produtos.js"></script>

</body>

</html>