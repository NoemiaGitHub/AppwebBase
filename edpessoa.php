<?php
include 'conecta.php';
$id =$_GET['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sql = "UPDATE pessoa set nome=?,idade=? WHERE id=?";
$pes = $conn->prepare($sql) or die($conn->error);
if (!$pes){
    echo "erro:".$conn->error;
}
$pes->bind_param('ssi', $nome,$idade,$id);
$pes->execute();
$pes->close();
header("location: index.php");
?>