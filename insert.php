<?php
include_once('conexao.php');

$nome = $_POST['nome'];

$edi = $_POST['editora'];

$autor = $_POST['autor'];

$qtd_pag = $_POST['qtd_pag'];

$genero = $_POST['genero'];



$stmt = $pdo->prepare('INSERT INTO livro (nome, editora, autor, qtd_pag, genero) VALUES(:nome, :editora, :autor, :qtd_pag, :genero)');
 $stmt->bindParam(':nome', $nome);
 $stmt->bindParam(':editora', $edi); 
 $stmt->bindParam(':autor', $autor); 
 $stmt->bindParam(':qtd_pag', $qtd_pag); 
 $stmt->bindParam(':genero', $genero);
 $stmt->execute();  
// $stmt->execute(array(
// 					':nome' => $nome, 
// 					':editora' => $edi,
// 					':autor' => $autor, 
// 					':qtd_pag' => $qtd_pag, 
// 					':genero' => $genero
// 					));
// echo $stmt->rowCount(); 
echo "Cadastrado com sucesso";
echo "<script>alert('Cadastro realizado com sucesso');</script>";
echo "<script>window.location='index.php'<script>";

?>
