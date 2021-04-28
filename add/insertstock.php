<?php
    if (isset($_POST['upload'])) {
        $target = "images/".basename($_FILES['image']['name']);

        $link = mysqli_connect("localhost","root","","project_database");

        $pname = $_POST['pname'];
        $quantity = $_POST['quantity'];
        $image = $_FILES['image']['name'];
        $packages = $_POST['packages'];

        $sql = "INSERT INTO stock (pname, quantity, image, packages) VALUES ('$pname', '$quantity', '$image', '$packages')";
        mysqli_query($link, $sql);

        header("location: ../stock.php");
    }


?>