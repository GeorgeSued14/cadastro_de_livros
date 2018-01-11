<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Livros</title>
	<link rel="stylesheet" href="principal.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#ajax_form').submit(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "insert.php",
				data: dados,
				success: function( data )
				{
					alert("cadastrado com sucesso");
					location.href="index.php"				}
			});
			
			return false;
		});
	});
	</script>
</head>
<!-- Cometei aqui em galera -->
<body>
	<h1> Cadastro de Livros</h1><br>
	<form action="" method="POST" id="ajax_form">
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
	<br>

    <section>

    <table>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Editora</th>
			<th>Autor</th>
			<th>Quantidade de Páginas</th>
			<th>Gênero</th>
			<th>Ações</th>
		</tr>
			<?php
              include_once('conexao.php');
              $consulta = $pdo->query("SELECT * FROM livro");
              // while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    		  foreach ($consulta as $linha) {
    		  // $nome = $linha['nome'];
    		  // $editora = $linha['editora'];
    		  // $autor = $linha['autor'];
    		  // $qtd_pag = $linha['qtd_pag'];
    		  // $genero = $linha['genero'];
    		  echo '<tr>';
    		  echo '<td>'.$linha['id']."</td>";
    		  echo '<td>'.$linha['nome']."</td>";
    		  echo '<td>'.$linha['editora']."</td>";
    		  echo '<td>'.$linha['autor']."</td>";
    		  echo '<td>'.$linha['qtd_pag']."</td>";
    		  echo '<td>'.$linha['genero']."</td>";
    		  echo '<td> <a href="delete.php?id='.$linha['id'].'">deletar</a><td>';
    		  echo '<td> <a href="editar.php?id='.$linha['id'].'">Editar</a><td>';

    		  echo '</tr>';
    		  	}
			?>
				
	</table>
    	
    </section>
</body>
</html>