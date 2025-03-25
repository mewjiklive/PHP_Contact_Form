<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<?php
$name= $_POST["username"]; 
$email= $_POST["email"]; 
$concern= $_POST["concern"]; 
// connecting to the database 
    $servername= "localhost"; 
    $username="root"; 
    $password=""; 
    $databse="contacts"; 
// create a connection 
    $conn= mysqli_connect($servername, $username, $password,$databse); 
// submitting data into the database 
    $sql= "INSERT INTO `contactus` ( `Name`, `Email`, `Concern`) VALUES ( '$name', '$email', '$concern');"; 
    $result = mysqli_query($conn, $sql);
// on form submission 
    if($result){
        echo "Your Form has been Submitted Successfully"; 
    }
    else{
        echo "You Form Data Has not been submitted successfully"; 
    }
?> 
</div>
</body>
</html>