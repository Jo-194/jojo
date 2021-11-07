<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Choix_serie</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body id="dgo">

	<?php  include('menu.php') ?>		
		
		<div class="right">
			<h1 style=" color: #3c733c; text-align:center;"c>Rechercher une filière où s'inscrire</h1><br><br>
			 <h2 style="text-align: center;">Veillez selectionner votre série: </h2><br><br>
			 
			 <form action="orient1.php" method="post" style="text-align: center;">
			 <select style="font-size: 30px;" name="choix">
					<option>A1</option> 
					<option>A2</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
					<option>E</option>
					<option>F</option>		
					<option>G1</option>
					<option>G2</option>
				
				
				</select>
				<button type="submit" style="padding-right:50px; background-color:green; color:white">Aller à</button><br>

				</form>

		</div>

	
</body>
</html>