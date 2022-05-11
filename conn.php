<?php
//$conn = new PDO("sqlsrv:Database=dbphp8;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
$conn = new PDO("oci:dbname=localhost:1521/xe", "system", "root");
?>