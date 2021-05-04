<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project_database");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $usertype = mysqli_real_escape_string($link, $_POST['userType']);

    // Attempt insert query execution
    $sql = "SELECT userID FROM users WHERE Email = '$email' AND PasswordHash = '$password' AND userType ='$usertype'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if($count == 1 && $usertype == "user"){
        $_SESSION["email"] = $email;
      header("location:../index.php");
    }
    else if($count == 1 && $usertype == "admin"){
        $_SESSION["email"] = $email;
      header("location:../admin.php");
    }
    else{
    echo "Username or Password are incorrect!";
    }
}
// Close connection
mysqli_close($link);
?>