<?php

$username = "root";
$password = "";
$dbname = "atendimento_os";
$sql = "use atendimento_os; SELECT * FROM atendimento_os";

$conect = null;

try {
    $conect = new PDO('mysql:host=localhost:3306;dbname=oselevadores', $username, $password);
  
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}
return $conect;
?>