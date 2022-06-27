<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP básico</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>

    <body>
        <div class="container-fluid">
            <form action="" method="GET">
                <div class="card">
                    <div class="card-header">
                        Formulário exemplo
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <span class="form-label"> Nome </span>
                            <input class="form-control" type="text" placeholder="Digite aqui o nome"> </input>
                        </div>

                        <div class="form-group mt-3">
                            <span class="form-label"> Descrição </span>
                            <textarea class="form-control"> </textarea>
                        </div>
                        
                        <div class="form-group mt-3">
                            <span class="form-label"> Arquivo </span>
                            <input type="file" class="form-control"> </textarea>
                        </div>
                    </div>

                    <div class="card-header">
                        <input type="submit" class="btn btn-success" value="Salva cadastro"> </input>
                    </div>
                </div>
            </form>

            <div class="alert alert-success"> Funcionou tudo </div>
        </div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>