<?php 

	session_start();

	if (isset($_SESSION['user'])) {
		header("location:login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Accueils</title>
		<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>

		<?php  include('menu.php') ?>	
		<div class="right">
			<h1 style="text-align: center; font-size:100px">Bienvenue <?php  echo $_SESSION['nom'] ?> sur notre plateforme d'orientation</h1>
		</div>
		</div>

		
	
</body>
</html>