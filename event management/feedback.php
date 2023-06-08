<?php
$serevername="localhost";
$username="root";
$password="";
$dbase="website";
$conn = mysqli_connect($serevername,$username,$password,$dbase);
    if(!$conn){
        die("connection faild!" . mysqli_connect_error());
    }
    else{
        echo "connection succesful";
    }
$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata` (`id`, `user`, `email`, `message`) VALUES (NULL, '$user', '$email', '$message');";
    

if (mysqli_query($conn, $query)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>