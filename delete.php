<?php
include_once ('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM livro WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->execute(array('id' => $id));

echo "Seus dados foram deletados com sucesso";


?>

