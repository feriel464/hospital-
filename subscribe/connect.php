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
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$speciality = $_POST['speciality'];
$birth_date = $_POST['birth_date'];
if($conn->connect_error){
    die ('connection failed:'.$conn->connect_error); 
}

else{
    
   // $stmt =$conn->prepare("insert into connect
    //(firstname,lastname,phone_number,email,password,confirm_password,speciality,birth_date)values("$firstname","$lastname","$phone_number","$email","$password", "$confirm_password", "$speciality", "$birth_date")")  ;
    $req="INSERT INTO connect
    (firstname,lastname,phone_number,email,pass,confirm_password,speciality,birth_date)
    values('$firstname','$lastname','$phone_number','$email','$password', '$confirm_password', '$speciality', '$birth_date')";
    //$stmt->bind_param("ssissssd", $firstname, $lastname, $phone_number, $email, $password, $confirm_password, $speciality, $birth_date);
    if ($conn->query($req))
     {
        header("Location:http://localhost/webtest/doctor%20doctor/doctor.html");
     
    }
    //$req->close(); 
    $conn->close();}
// enctype  bech ki ta3ath taswira tnajam tetcoda en binaire 
?>
