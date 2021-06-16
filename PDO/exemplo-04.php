<?php

$conn =new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "joao";
$PASSWORD = "qertyu";
$id = 1;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $PASSWORD);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Alterado, OK!";

?>