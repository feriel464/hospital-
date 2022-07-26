<?php
$dbhost ='localhost'; 
$dbuser='root'; 
$dbpass=''; 
$db='health'; 
$conn = new mysqli($dbhost,$dbuser,$dbpass,$db); 
$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname']; 
$phone_number = $_POST['phone_number']; 
$email = $_POST['email']; 
$pass = $_POST['pass'];
$confirm_password = $_POST['confirm_password'];
$date = $_POST['date'];
if($conn->connect_error){
    die ('connection failed:'.$conn->connect_error); 
}

else{
    
   // $stmt =$conn->prepare("insert into connect
    //(firstname,lastname,phone_number,email,password,confirm_password,speciality,birth_date)values("$firstname","$lastname","$phone_number","$email","$password", "$confirm_password", "$speciality", "$birth_date")")  ;
    $req="INSERT INTO patient2
     (firstname,lastname,phone_number,email,pass1,confirm_password,date2)
    values('$firstname','$lastname','$phone_number','$email','$pass', '$confirm_password', '$date')";
    //$stmt->bind_param("ssissssd", $firstname, $lastname, $phone_number, $email, $password, $confirm_password, $speciality, $birth_date);
    if ($conn->query($req))
     {
        header("Location:http://localhost/webtest/patient%20patient/patient1.html");

     
    }
    //$req->close(); 
    $conn->close();}
// enctype  bech ki ta3ath taswira tnajam tetcoda en binaire 
?>
