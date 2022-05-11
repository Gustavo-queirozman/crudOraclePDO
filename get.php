<?php

require_once("./conn.php");

$sql= $conn->prepare("SELECT *FROM tb_usuarios");

$sql->execute();

$rows =$sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($rows);

?>