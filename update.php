<?php
include_once ('conexao.php');

$id = $_POST['id'];

$nome = $_POST['nome'];

$edi = $_POST['editora'];

$autor = $_POST['autor'];

$qtd_pag = $_POST['qtd_pag'];

$genero = $_POST['genero'];

$sql = "UPDATE livro SET nome = :nome, editora = :editora, autor = :autor, qtd_pag = :qtd_pag, genero = :genero WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
 $stmt->bindParam(':editora', $edi); 
 $stmt->bindParam(':autor', $autor); 
 $stmt->bindParam(':qtd_pag', $qtd_pag); 
 $stmt->bindParam(':genero', $genero);
 $stmt->execute();  

echo "Seus dados foram alterados  com sucesso";


?>

	<a href="index.php" title="">voltar</a>


