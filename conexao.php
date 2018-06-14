<?php

$user = "root";
$pass = "";

try {

$pdo = new PDO('mysql:host=localhost;dbname=cadastro_de_livros', $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e) {

	echo 'ERROR:' . $e->getMessage();
}
# Esse é um teste
?>