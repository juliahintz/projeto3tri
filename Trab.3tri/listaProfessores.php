<?php
	
	include("cabecalho.php");

?>

	<div class="coluna10">.</div>

	<!-- conteudo principal -->
	<article class="coluna80">
		<section class="lista">
			<ul>

<?php


	include("professores.php");
	//a função retorna um array contendo os professores
	$lista = listaProfessores();

	foreach ($lista as $professor) {

		print('<li><a href="detalhaProfessor.php?cod='. $professor['siape'].'">'.$professor['nome'].'</a> - '.$professor['email'].'</li>');
	
	}
?>

	</ul>
		</section>
	</article>

<?php
	include("rodape.php");
?>