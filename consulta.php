
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Livros</title>
	<link rel="stylesheet" href="principal.css">
</head>
<body>
	<h1> Cadastro de Livros</h1><br>
	<form action="insert.php" method="POST">
		<label for="">
			 <input type="text" name="nome" placeholder="Nome">
		</label>

		<label for="">
			 <input type="text" name="editora" placeholder="Editora">
		</label>
		
		<label for="">
			 <input type="text" name="autor" placeholder="Autor">
		</label>
		
		<label for="">
			 <input type="text" name="qtd_pag" placeholder="Quantidade de Páginas">
		</label>

		<label for="">
			 <input type="text" name="genero" placeholder="Gênero">
		</label>

		<input type="submit" value="Cadastrar">
		<input type="reset" name="" value="Limpar">
	</form>
	<a href="delete.php">deletar</a>
	<br>

    <section>

    <table>
		<tr>
			<th>header</th>
		</tr>
			<?php
              include_once('conexao.php');
              $consulta = $pdo->query("SELECT * FROM livro");
              while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    		  $nome = $linha['nome'];
    		  $editora = $linha['editora'];
    		  $autor = $linha['autor'];
    		  $qtd_pag = $linha['qtd_pag'];
    		  $genero = $linha['genero'];
    		  echo "<tr>
    		  			<td>$nome<td>
    		  			<td>$editora<td>
    		  			<td>$autor<td>
    		  			<td>$qtd_pag<td>
    		  			<td>$genero<td>
    		  		</tr>";
    		}
			?>	
	</table>
    	
    </section>
</body>
</html>