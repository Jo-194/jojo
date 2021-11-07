<?php 

include('config.php');

error_reporting(0);

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = md5( $_POST['password']);
    $cpassword = md5( $_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE email= '$email' ";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            echo " <script> alert('L'email existe deja')</script>";
            
        }else{

            $sql= "INSERT INTO user(nom,email, password ) VALUES('$nom','$email','$password') ";
            $result= mysqli_query($conn, $sql);
            if ($result) {
                echo " <script> alert('Enregistrer avec succès')</script>";
                $nom ="";
                $email ="";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            }else{
                echo " <script> alert('oupss error')</script>";
            }
         }
     }else{
        echo " <script> alert('Mot de passe incorrect')</script>";
    }
   

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register </title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    
<div class="note">
    <form action="" method="POST" class="login-mail">
        <p  style="font-size: 2rem;font-weight:800; text-align:center ">Inscription</p>
        <div class="input-group">
            <input type="text" placeholder="Nom complet"  name="nom" value="<?php  echo $nom  ;?>" required>
        </div><br>
        <div class="input-group">
            <input type="email" placeholder="email" name="email" value="<?php  echo $email  ;?>" required>
        </div><br>
        <div class="input-group">
            <input type="password" placeholder="password" name="password" value="<?php  echo $_POST['password'];  ;?>" required>
        </div><br>
        <div class="input-group">
            <input type="password" placeholder="confirmer password" name="cpassword"  value="<?php  echo $_POST['cpassword'] ;?>"required>
        </div><br><br>
      
            <button class="btn" name="submit" style="text-align: center; border:1px solid; margin-left:150px">Inscription</button><br><br>
     
        <p style="text-align: center;" >J'ai un compte!! <a href="login.php">Connectez-vous</a></p>
    </form>
</div>
</body>
</html>


