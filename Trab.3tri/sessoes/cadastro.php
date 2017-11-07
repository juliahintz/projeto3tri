<?php

	session_start();


//ISSET- está definida? Ela existe, tem valor?
	
if(	isset($_SESSION['login']) and $_SESSION['login'] == "admin" ){//se passou pelo login



?>

<!DOCTYPE html>
<html>
<head>
	<title>restrito adm</title>
</head>
<body>
	<H2>Pagina de cadastro</H2>

</body>

</html>

<?php

}else{
	echo("Acesso restrito");
	echo('<meta http-equiv="refresh" content="2;url=publica.php">');
}

?>