<?php
// acrescentar uma verificação se não estuiver logado, exibir for 
//se estiver logado, exibir mensagem com seu nome e um link para sair 
//não esquecer de iniciar a sessão

	session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Pública</title>
</head>
<body>

<?php

if(isset($_SESSION['login'])){
?>

<p>Olá, <?=$_SESSION['nome']?></p>
<p><a href="logout.php">Sair</a></p>

<?php

}else{

?>
	
	<h2>Bem Vindo!</h2>


	<form action="login.php" method="post">

		<label for="login">Login</label>
		<input type="text" name="login">

		<label for="senha">Senha</label>
		<input type="password" name="senha">

		
		<input type="submit" name="entrar">
	</form>

<?php

}

?>

</body>
</html>