<?php
include 'conecta.php';
$nome = $_POST["nome"];
$idade = $_POST["idade"];

if (!isset($nome)) {
    echo "<script language='javascript' type='text/javascript'>
        alert('Por favor, digite o nome e a idade!');
        window.location.href='index.php';
        </script>";
}
$sql = "INSERT INTO pessoa(nome,idade) VALUES ('$nome','$idade')";
if (mysqli_query($conn, $sql)) {
    echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';
        </script>";
}
mysqli_close($conn);
