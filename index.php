<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Cadastro de Pessoas</title>
</head>

<body>
    <center>
        <h2><b>CADASTRO DE PESSOAS</b></h2>
    </center>
    <hr />
    <br />
    <center><button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">CADASTRAR</button></center>
    <br />
    <br />
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4 text-center">
            <div class="col-md-12">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <h3><b>PESSOAS CADASTRADAS</b></h3>
                    </div>
                    <div class="card-body">
                        <?php
                        include 'pessoas.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CADASTRO DE PESSOA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="cadastro.php" method="post">
                        <label>NOME</label>
                        <input type="text" class="form-control" name="nome" required />
                        <br />
                        <label>IDADE</label>
                        <input type="number" class="form-control" name="idade" required />
                        <br />
                        <button type="submit" class="btn btn-outline-success">CADASTRAR</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>