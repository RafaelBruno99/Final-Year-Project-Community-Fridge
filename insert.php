<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$phonenumber = mysqli_real_escape_string($link, $_REQUEST['phonenumber']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$packages = mysqli_real_escape_string($link, $_REQUEST['packages']);
$observation = mysqli_real_escape_string($link, $_REQUEST['observation']);
 
// Attempt insert query execution
$sql = "INSERT INTO orders (first_name, last_name, phonenumber, email, packages, observation) VALUES ('$first_name', '$last_name', '$phonenumber', '$email', '$packages', '$observation')";
if(mysqli_query($link, $sql)){
    header('location: selection.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>