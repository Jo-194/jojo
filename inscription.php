

<?php   
		$conn = new PDO('mysql:host=localhost;dbname=orientation', 'root', 'jojo63');
		if (isset($_POST['ok'])) {
			

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $conpass = $_POST['conpass'];
            $carmen = [$nom, $prenom, $email, $pass, $conpass];
            //var_dump($carmen);
            $sql= $conn->prepare("INSERT INTO personne(nom, prenom, email, pass, confirme) VALUE(?,?,?,?,?)");
            $sql->execute($carmen);
            if ($sql) {
                echo " <script> alert('New record create successfully')</script>";
            }else {
                echo " <script> alert('error')</script>";
                header('inscription.php');
            }
	
        
	   }


?>	
 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Choix_serie</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<?php  include('menu.php') ?>	
<div class="right">

<h1 style="text-align: center;">Veillez vous connectez:</h1> <br>

        <div class="note" style="font-size: 20px;">
                    <form action="" method="post">
            <h1 style="text-align: center;"> inscription</h1>

            Nom : <input type="text" name="nom" style="width: 300px;"><br><br>
            Prenom : <input type="text" name="prenom" style="width: 300px;"><br><br>
            Email : <input type="text" name="email" name="email" id="" style="width: 300px;"><br><br>
            password : <input type="password" name="pass" name="" id="" style="width: 300px;"><br><br>
           confirm password : <input type="password" name="conpass" name="" id="" style="width: 300px;"><br><br>
            <Button style="text-align: center;" name="ok">S'inscrire</Button><br><br><br>
            <h3>Vous avez  un compte?<a href="login.php "  style="font-size:25px;"> se connecter </a></h3>
            </form>
       
        </div>
            


</div>


</body>
</html>
