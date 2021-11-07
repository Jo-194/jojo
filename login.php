<?php 
include('config.php');
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE email='$email'  AND password= '$password'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) 
    {

        $row  =  mysqli_fetch_assoc($result);
        $_SESSION['nom'] = $row['nom'];
        header("location:acueil.php");
    }else {
        echo " <script> alert('email ou mot de passe incorrect')</script>";
       
    }


}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>connexion</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

        <div class="note" style="font-size: 20px;">
            <form action="" method="post">
            <h1 style="text-align: center;"> connexion</h1>

            <div class="input-group">
                 <input type="text" style="width: 300px;" placeholder="Email" name="email" value="<?php  echo $email  ;?>" required>
            </div><br>
            <div class="input-group">
                 <input type="password" style="width: 300px;" placeholder="Password" name="password" value="<?php  echo $_POST['password'];?>"  required >
            </div><br>
         
            <Button style="text-align: center; border:1px solid; margin-left:150px" name="submit">Se connecter</Button>
                       
            <h3 style="text-align: center;">Vous n'avez pas un compte?<a href="register.php "  style="text-decoration:none"> s'inscrire </a></h3>
            </form>
        </div>
            


</div>


</body>
</html>
