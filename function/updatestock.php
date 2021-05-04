<?php
    if (isset($_POST['minus'])) {
        $target = $_POST['minus'];

        $link = mysqli_connect("localhost","root","","project_database");

        $sql = "UPDATE FROM orders  WHERE id = '$target'";
        $data = mysqli_query($link, $sql);

        if ($data) {
            echo "data been removed";

            header("location: ../admin.php");
        }
        else {
            echo "failed to delete data";
        }
    }
?>