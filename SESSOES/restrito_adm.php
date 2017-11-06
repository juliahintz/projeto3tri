<?php

	session_start();

if($_SESSION['login'] =='admin' ){//se passou pelo login



?>


<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
</head>
<body>
	<h2>A página do <?=$_SESSION['nome']?></h2>
	<a href="logout.php">Sair</a>
	<p>Nesta página você irá administrar as configurações do sistema...</p>

</body>
</html>

<?php

}else{
	echo("Acesso restrito");
	echo('<meta http-equiv="refresh" content="2;url=publica.php">');
}

?>