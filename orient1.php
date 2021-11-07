<?php   
		$conn = new PDO('mysql:host=localhost;dbname=orientation', 'root', 'jojo63');
		if (isset($_POST['valider'])) {
			

            $code = $_POST['code'];
            $libel = $_POST['lib'];
            $type = $_POST['typ'];
            $carmen = [$code, $libel, $type];
            //var_dump($carmen);
            $sql= $conn->prepare("INSERT INTO filiere(idfil, libfil, typefil) VALUE(?,?,?)");
            $sql->execute($carmen);
	
        
	   }


?>	
 
		
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>reseigner note</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		
</head>
<body>

		

		<?php  include('menu.php') ?>	

		<div class="right">
			<h1 style="text-align: center;">Veillez entrez vos notes obtenues au BAC ainsi que votre myenne générale:</h1> <br>

			
			<?php $Choix = $_POST['choix'];?>
						<!-- //serie litteraire -->
						<?php if ($Choix == "A1") {	?>
				<form action="resultat.php" method="post">
					<div class="note" style="font-size:20px">
							<h1 style="text-decoration: underline;"> Série :<?php echo $Choix?></h1>
							<h2>Français: &emsp;&ensp;&emsp;&emsp;&emsp;<input type="number" name="note1" id=""></h2>
							<h2>Philosophie:&emsp14;&emsp;&emsp;&emsp;<input type="number" name="note2" id=""></h2>
							<h2>Langue Vivante 1:&emsp14;&ensp;<input type="number" name="note3" id=""></h2>
							<h2 style="color:tomato">Moyenne Obtenue: &emsp14;&emsp14;<input type="number"  step="any" name="note4" id=""></h2><br>
							<button  type="submit" name="valider" style="background-color: turquoise;">soumettre</button> 
					</div>
					</form>	
			
							
				
					
					<?php }else if($Choix == "A2" ){ ?>
						<form action="resultat.php" method="post">
						<div class="note" style="font-size:20px">
							<h1 style="text-decoration: underline;"> Série :<?php echo $Choix?></h1>
							<h2>Histoire-Geo: &emsp;&ensp;&emsp;<input type="number" name="note1" id=""></h2>
							<h2>Français : &emsp;&ensp;&emsp;&emsp;&ensp;<input type="number" name="note2" id=""></h2>
							<h2>Langue Vivante 1:&emsp14;&ensp;<input type="number" name="note3" id=""></h2>
						
							<h2 style="color:tomato">Moyenne Obtenue: &emsp14;&emsp14;<input type="number" name="note4" step="any"id=""></h2><br>

							<button  type="submit" name="valider" style="background-color: turquoise;">soumettre</button> 
							
					
					</div>
					</form>	
			
			

					
					<?php }else if($Choix == "B" ){ ?>
						<form action="resultat.php" method="post">
						<div class="note" style="font-size:20px">
							<h1 style="text-decoration: underline;"> Série :<?php echo $Choix?></h1>
							<h2>Economie:  &emsp;&ensp;&emsp;&emsp;&ensp;<input type="number" name="note1" id=""></h2>
							<h2>Français: &emsp;&ensp;&emsp;&emsp;&emsp;<input type="number" name="note2" id=""></h2>
							<h2>Langue Vivante 1:&emsp14;&ensp;<input type="number" name="note3" id=""></h2>
						
							<h2 style="color:tomato">Moyenne Obtenue: &emsp14;&emsp14;<input type="number" step="any" name="note4" id=""></h2><br>

						<button type="submit" name="valider"  style="background-color: MediumTurquoise;">Soumettre</button>
						
					</div>
					</form>	
			
			
								<!-- les serie scientifique C D -->
								
					<?php }else if($Choix == "C" || $Choix == "D" ){ ?>
						<form action="resultat.php" method="post">
					<div class="note" style="font-size:20px">
					<h1 style="text-decoration: underline;"> Série :<?php echo $Choix?></h1>
						<h2>Mathématique: &emsp;&ensp;<input type="number" name="note1" id=""></h2>
						<h2>Physique-Chimie: &ensp;<input type="number" name="note2" id=""></h2>
						<h2>S V T:&emsp14;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;<input type="number" name="note3" id=""></h2>
						
						<h2 style="color:tomato">Moyenne Obtenue: &emsp14;&emsp14;<input type="number" step="any" name="note4" id=""></h2><br>

						<button type="submit" name="valider"  style="background-color: MediumTurquoise;" type="submit" name="submit">Soumettre</button>
					</div>
	
					</form>	
			
			

					<!-- les serie technique F -->
					
						<?php }else if($Choix == "F" ){ ?>
							<form action="resultat.php" method="post">
							<div class="note" style="font-size:20px">
					<h1 style="text-decoration: underline;"> Série :<?php echo $Choix?></h1>
						<h2>Mathématique: &emsp;&ensp;&ensp;<input type="number" name="note1" id=""></h2>
						<h2>Etude de sys Tech: &ensp;<input type="number" name="note2" id=""></h2>
						<h2>Mecanique:&emsp14;&emsp;&emsp;&ensp;&emsp;<input type="number" name="note3" id=""></h2>
						
						<h2 style="color:tomato">Moyenne Obtenue: &emsp14;&emsp14;<input type="number" step="any"name="note4" id=""></h2><br>

						<button  type="submit" name="valider"  style="background-color: MediumTurquoise;">Soumettre</button>
						</div>

						</form>	
			

											<!-- les serie comptabilité G -->
				
					<?php }else if($Choix == "G2" || $Choix == "G1" ){ ?>
						<form action="resultat.php" method="post">
						<div class="note" style="font-size:20px">
					<h1 style="text-decoration: underline;"> Série :<?php echo $Choix?></h1>
						<h2>Etude de cas: &emsp;&ensp;&emsp;<input type="number" name="note1" id=""></h2>
						<h2>Economie: &ensp;&emsp;&emsp;&emsp;<input type="number" name="note2" id=""></h2>
						<h2>Math Appliquée:&emsp14;&emsp;<input type="number" name="note3" id=""></h2>
						
						<h2 style="color:tomato">Moyenne Obtenue: &emsp14;&emsp14;<input type="number" step="any" name="note4" id=""></h2><br>

						<button type="submit" name="valider"  style="background-color: MediumTurquoise;">Soumettre</button>
					</div>
					</form>	
			
		

								<!-- les serie electronique E -->
					<?php }else { ?>

						<form action="resultat.php" method="post">
						<div class="note" style="font-size:20px">
					<h1 style="text-decoration: underline;"> Série :<?php echo $Choix?></h1>
						<h2>Mathématique: &emsp;&ensp;&ensp;<input type="number" name="note1" id=""></h2>
						<h2>Science physique: &ensp;&ensp;<input type="number" name="note2" id=""></h2>
						<h2>Méca/manipul:&emsp14;&emsp;&emsp;<input type="number" name="note3" id=""></h2>
						
						<h2 style="color:tomato">Moyenne Obtenue: &emsp14;&emsp14;<input type="number"step="any" name="note4" id=""></h2><br>

						  <button type="submit" name="valider" style="background-color: MediumTurquoise;">Soumettre</button>

					<?php	} 	?>
		
			</div>
			</form>	
			
			
			
			
		</div>

		

</body>
</html>