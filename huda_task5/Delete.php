<?php


$Email=$_GET['OldEmail'];
$Password=$_GET['OldPassword'];

$link = mysqli_connect("localhost", "root", "hanaa12300", "signup");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$sql = "DELETE FROM user WHERE Email='$Email'";
if(mysqli_query($link, $sql)){
     header("Location: task4.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>