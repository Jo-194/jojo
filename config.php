<?php 

$server = "localhost";
$user = "root";
$pass = "jojo63";
$database = "login_user";

$conn  = mysqli_connect($server, $user,$pass,$database);
if (!$conn) {
    echo die(" <script> alert('connexion echouées')</script>");
}else {
    // echo " <script> alert('connexion reussir')</script>";
}
?>