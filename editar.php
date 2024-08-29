<?php
include 'conecta.php';
$id = $_GET['id'];
$sql ="SELECT *FROM pessoa WHERE id=$id";
$query = $conn->query($sql);
while ($dados = $query->fetch_array()){
    $nome = $dados['nome'];
    $idade = $dados['idade'];
    }
?>

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
    <br />
    <br />
    <br />
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4 text-center">
            <div class="col-md-12">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <h3><b>EDITAR PESSOA</b></h3>
                    </div>
                    <div class="card-body">
                       <form action="edpessoa.php?id=<?php echo $id;?>" method="POST">
                            <label class= "form-control">NOME</label>
                                <input type="text" name="nome" class="form control" value="<?php echo $nome;?>">
    </br>
                                <label class= "form-control">IDADE</label>
                                <input type="text" name="idade" class="form control" value="<?php echo $idade;?>">
    </br>
                                <input type="submit" class="btn btn-outline-success" value= "atualizar"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br/>
  </body>
</html>