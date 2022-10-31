<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>

    <style>
        body
        {
            margin: 10%;
        }
    </style>
    
</head>
<body>
    
<form action="/login/auth" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_login" placeholder="usuario@gmail.com" required>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="senha_login" placeholder="********" required>
    </div>

    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Lembrar Login
            </label>
        </div>

        
        <a href="" style="color: rgb(0, 0, 255);">Esqueci a senha</a>
    </div>


    <button type="submit" class="btn btn-primary">Logar</button>
    
</form>



<!--FormCadastro-->
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Cadastre-se
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
            </div>
      
            <div class="modal-body">
      
      
      
      
                <form action="/login/cadastro/save" method="post">  
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nome:</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nome_cadastro" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_cadastro" placeholder="usuario@gmail.com" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="senha_cadastro" placeholder="********" required>
                    </div>

            </div>
      
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

            </form>
        </div>
    </div>
</div>
<!--FormCadastro-->









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