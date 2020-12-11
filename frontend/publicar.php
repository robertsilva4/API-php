<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar Produtto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <?php
    include_once("templates/nav.php");
    include_once("templates/carrinho.php")
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
                    <label class="mt-5" for="desc">Descrição</label>
                    <input class="form-control" type="text" name="desc" id="desc">
                    <p class="campoError" id="descError"></p>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label class="mt-3" for="valor">Valor:</label>
                    <input class="form-control" type="text" name="valor" id="valor">
                    <p class="campoError" id="valorError"></p>
                </div>
                <div class="col">
                    <label class="mt-3" for="categoria">Categoria:</label>
                    <input class="form-control" type="text" name="categoria" id="categoria">
                    <p class="campoError" id="categoriaError"></p>
                </div>
            </div>
            <div class="form-row">
                <div class="col"></div>
                <div class="col">
                    <label class="mt-3" for="imag">imagem:</label>
                    <input class="form-control" type="input" name="imag" id="imag">
                    <p class="campoError" id="imagError"></p>
                </div>
            </div>

            <button href="javascript:void(0)" class="btn btn-success mt-4 float-right" type="button" id="publicar">Publicar</button>

        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/publicar.js"></script>

</body>

</html>