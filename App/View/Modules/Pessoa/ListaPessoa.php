<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <?php include 'css/bootstrap_personalizado.php';?>

        <title>Lista Pessoas</title>

        <style>

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

        </style>
    </head>
    
    
    <body>
        
        <table class="table">
            <thead class="table-dark">

            </thead>
                <th>#</th>
                <th>ID</th>
                <th>Nome</th>
                <th>RG</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>

            <tbody>
                <?php foreach($model->rows as $item): ?>

                <tr>
                    <td>
                        <a href="/pessoa/delete?id=<?= $item->id ?>" class="botao_excluir">X</a>
                    </td>

                    <td><a><?= $item->id ?></a></td>

                    <td>
                        <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
                    </td>

                    <td>
                        <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->rg ?></a>
                    </td>

                    <td>
                        <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->cpf ?></a>
                    </td>

                    <td>
                        <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->data_nascimento ?></a>
                    </td>

                    <td>
                        <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->email ?></a>
                    </td>

                    <td>
                        <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->telefone ?></a>
                    </td>

                    <td>
                        <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->endereco ?></a>
                    </td>

                </tr>

                <?php endforeach ?>



                <?php if (count($model->rows) == 0):?>

                <tr>
                    <td colspan="5">Nenhum registro foi encontrado.</td>
                </tr>

                <?php endif?>
            </tbody>
        </table>
        
        <button onclick="document.location='/pessoa/form'" class="btn btn-personalizado" style="margin-left: 0.5%;">Cadastrar</button>




















    
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