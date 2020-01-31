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

$user = $_POST['User'];
$email = $_POST['Email'];
$mobile = $_POST['Mobile'];  // Making a mobile variable
$comments = $_POST['Comments'];

$query = "Insert into userinfodata (User, Email, Mobile, Comments) 
values ('$user', '$email', '$mobile', '$comments');";

mysqli_query($con, $query);  # Executing Query

// echo "$query";  # Printing query

header('location:index.php');  // Redirecting to index.php

?>