<?php 

if(isset($_POST['email1']) && isset($_POST['password1'])){
    $nom_serveur="localhost";
    $uti="root";
    $mdp="";
    $nombd="health";
    $email1=$_POST['email1'];
    $password1=$_POST['password1'];
    $conn=mysqli_connect($nom_serveur,$uti,$mdp,$nombd);
    $req=mysqli_query($conn, "SELECT *FROM feriel WHERE email1='$email1' AND password1='$password1'");
    $num_ligne= mysqli_num_rows($req); 
   
        header("Location:http://localhost/webtest/patient%20patient/patient1.html");
       
}
?>