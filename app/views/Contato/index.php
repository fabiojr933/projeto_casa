<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #ffedf2;
            /* Substitua 'red' pela cor desejada */
        }
    </style>
</head>

<body id="conteudo">

    <div class="container2" id="container2">
        <h1 class="text-center">Meu Painel</h1> <br><br>
        <div id="loading" style="display: flex; justify-content: center; align-items: center;">
            <img src="<?php echo URL_BASE ?>assets/img/loading.gif" alt="Loading...">
        </div>
        <h6 class="text-center">Enviando dados... aguarde....</h6> <br><br>
    </div>
    <?php $this->verMsg() ?>


    <div class="container mt-5" id="container" style="display: none;">
        <h2 class="mb-4 text-center">Formulário</h2>
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">Aluna</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Responsavel</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data Nasc</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($lista as $cliente) {  ?>

                    <tr>
                        <td style="width: 25%;"><?php echo isset($cliente->aluna) ? $cliente->aluna : null ?></td>
                        <td style="width: 5%;"><?php echo isset($cliente->idade) ? $cliente->idade : null ?></td>
                        <td style="width: 25%;"><?php echo isset($cliente->endereco) ? $cliente->endereco : null ?></td>
                        <td style="width: 20%;"><?php echo isset($cliente->responsavel) ? $cliente->responsavel : null ?></td>
                        <td style="width: 10%;"><?php echo isset($cliente->telefone) ? $cliente->telefone : null ?></td>
                        <td style="width: 15%;"><?php echo isset($cliente->data) ? $cliente->data : null ?></td>
                    </tr>

                <?php }  ?>
            </tbody>
        </table>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function fecharMsg(obj) {
            $(".msg").hide();
        }

        window.addEventListener('load', carregar());

        function carregar() {

            document.getElementById("container2").style.display = "none";
            document.getElementById("container").style.display = "block";
        }
    </script>
</body>

</html>