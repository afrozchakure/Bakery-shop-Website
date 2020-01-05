<?php
$con = mysqli_connect('localhost', 'root');

if($con)
{
    echo "Connection Successful";
}
else
{
    echo "No connection";
}
mysqli_select_db($con, 'bakeryuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];  // Making a mobile variable
$comments = $_POST['comments'];

$query = "Insert into userinfodata (user, email, mobile, comments) 
values ('$user', '$email', '$mobile', '$comments');";

mysqli_query($con, $query);  # Executing Query

// echo "$query";  # Printing query

header('location:index.php');  // Redirecting to index.php

?>