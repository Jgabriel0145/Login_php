<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php include 'css/bootstrap_personalizado.php';?>
    <?php include 'css/style.php';?>

    <title>Cadastro de Usuários</title>
</head>
<body>
    
    <form method="post" action="/usuario/form/save" class="align-middle">
        <fieldset>
            <h2>Cadastro de Usuários</h2>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="<?= $model->nome ?>" required>
                </div>
            </div>
            
            <br>
            <div class="row">
                <div class="col">
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?= $model->email ?>" required>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col">
                <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="********" value="<?= $model->senha?>" required>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col" id="col_btn_enviar">
                    <button class="btn btn-personalizado" type="submit">Enviar</button>
                </div>
            </div>
            
            
        </fieldset>
    </form>
    

























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
    



</body>
</html>