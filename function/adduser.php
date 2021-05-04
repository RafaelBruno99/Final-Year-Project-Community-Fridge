<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project_database");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$usertype = mysqli_real_escape_string($link, $_REQUEST['userType']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

// Attempt insert query execution
$sql = "INSERT INTO users (FirstName, LastName, Email, PasswordHash, userType) VALUES ('$firstname', '$lastname', '$email', '$password', '$usertype')";
if(mysqli_query($link, $sql)){
    header("Location:../login.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>