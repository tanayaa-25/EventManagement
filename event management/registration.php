<?php
$firstname =$_POST["firstname"];
$middlename=$_POST["middlename"];
$lastname=$_POST["lastname"];
$Eventname=$_POST["Eventname"];
$Payment=$_POST["Payment"];
$amount=$_POST["amount"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$email=$_POST["email"];
$password=$_POST["pass"];
$repassword=$_POST["repass"];

$conn = mysqli_connect("localhost:3307","root","","register") or
die("could not connect :" . mysqli_error());

$sql = "call registration('$firstname','$middlename','$lastname','$Eventname','$Payment','$amount','$phone','$address','$email','$password','$repassword')";

if (mysqli_query($conn,$sql))
    echo"Thank you, Registered succesfully 
          Your event will be ready on time";
else
    echo"Error".mysqli_error();


mysqli_close($conn);

?>