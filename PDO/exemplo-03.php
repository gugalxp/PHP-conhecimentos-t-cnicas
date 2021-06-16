<?php

$conn =new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN,:PASSWORD)");

$login = "jose";
$PASSWORD = "123456789";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $PASSWORD);

$stmt->execute();

echo "Inserido OK!";

?>