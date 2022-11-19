<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Página Inicial</title>

        <style>

            .btn-personalizado {
                color: #fff;
                background-color: rgb(13, 73, 129);
                border-color: black;
            }

            .btn-personalizado:hover {
                color: #fff;
                background-color: rgb(41, 109, 173);
                border-color: black;
            }

            .btn-check:focus + .btn-personalizado, .btn-personalizado:focus {
                color: #fff;
                background-color: rgb(13, 73, 129);
                border-color: black;
                box-shadow: 0 0 0 0.25rem black;
            }

            .btn-check:checked + .btn-personalizado, .btn-check:active + .btn-personalizado, .btn-personalizado:active, .btn-personalizado.active, .show > .btn-personalizado.dropdown-toggle {
                color: #fff;
                background-color: rgb(13, 73, 129);
                border-color: black;
            }

            .btn-check:checked + .btn-personalizado:focus, .btn-check:active + .btn-personalizado:focus, .btn-personalizado:active:focus, .btn-personalizado.active:focus, .show > .btn-personalizado.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.25rem black;
            }

            .btn-personalizado:disabled, .btn-personalizado.disabled {
                color: #fff;
                background-color: rgb(13, 73, 129);
                border-color: black;
            }




            html
            {
                height: 100%;
                width: 100%;
            }

            body 
            {
                background-image: linear-gradient(#8EE4FF, #d1f4ff);
            }

            td a,td a:visited,td a:hover,td a:active, th 
            { 
                color: black ; 
                cursor: pointer; 
                font-weight: 500;
                font-size: large;
            }

            .itens
            {
                margin-top: 10%;
                margin-left: 10%;
            }

            .itens h2
            {
                margin-left: 11%;
            }

        </style>
    </head>
    
    
    <body>
    

    <div class="container">
        <div class="row">
            <div class="col">
                <button onclick="document.location='/logout'" class="btn btn-personalizado" style="margin-top: 23%;
                    margin-left: 10%;">Logout</button>
            </div>
            
            <div class="col">
                <div class="itens">
                    <h2>Pessoa</h2>

                    <button onclick="document.location='/pessoa/form'" class="btn btn-personalizado" style="margin-left: 0.5%;">Cadastrar</button>
                    <button onclick="document.location='/pessoa'" class="btn btn-personalizado" style="margin-left: 0.5%;">Listar</button>

                </div>    
            </div>
    
            <div class="col">
                <div class="itens">
                    <h2>Usuário</h2>

                    <button onclick="document.location='/usuario/form'" class="btn btn-personalizado" style="margin-left: 0.5%;">Cadastrar</button>
                    <button onclick="document.location='/usuario'" class="btn btn-personalizado" style="margin-left: 0.5%;">Listar</button>

                </div>
            </div>
        </div>
    </div>

        



















    
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>