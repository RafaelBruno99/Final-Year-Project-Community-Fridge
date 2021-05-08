<?php
    if (isset($_POST['minus'])) {
        $target = $_POST['minus'];

        $link = mysqli_connect("localhost","root","","project_database");

        $sql = "UPDATE stock  SET quantity = quantity - 1 WHERE id = '$target'";
        $data = mysqli_query($link, $sql);

        if ($data) {
            echo "data been removed";

            header("location: ../admin/stock.php");
        }
        else {
            echo "failed to delete data";
        }
    }

    if (isset($_POST['plus'])) {
        $target = $_POST['plus'];

        $link = mysqli_connect("localhost","root","","project_database");

        $sql = "UPDATE stock  SET quantity = quantity + 1 WHERE id = '$target'";
        $data = mysqli_query($link, $sql);

        if ($data) {
            echo "data been removed";

            header("location: ../admin/stock.php");
        }
        else {
            echo "failed to delete data";
        }
    }
?>