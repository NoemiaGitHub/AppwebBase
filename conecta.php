<?php
    $conn = mysqli_connect("db4free.net", "camargo", "abc321973", "aula2023");
    mysqli_set_charset($conn, "utf8");
    if (!$conn) {
        echo "Erro:" . mysqli_connect_error();
    }
?>