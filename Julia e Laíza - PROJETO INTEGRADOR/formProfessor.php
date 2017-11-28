<?php 

include('cabecalho.php');

if (isset($_SESSION['login'])) {

?>

</<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="insereProfessor.php" enctype="multipart/form-data">

	<label for="siape">Siape</label>
	<input type="text" name="siape">
		
	<label for="nome">Nome</label>
	<input type="text" name="nome">

	<label for="email">E-mail</label>
	<input type="text" name="email">

	<label for="foto">Foto</label>
	<input type="file" name="foto">

	<input type="submit" name="cadastrar">

	</form>
</body>
</html>



<?php	
}
?>