<?php

    if (isset($_POST['delete'])) {
        $target = $_POST['delete'];

        $link = mysqli_connect("localhost","root","","project_database");

        $sql = "DELETE FROM orders  WHERE id = '$target'";
        $data = mysqli_query($link, $sql);

        if ($data) {
            echo "data been removed";

            header("location: ../admin.php");
        }
        else {
            echo "failed to delete data";
        }
    }

    if (isset($_POST['deletestock'])) {
        $target = $_POST['deletestock'];

        $link = mysqli_connect("localhost","root","","project_database");

        $sql = "DELETE FROM stock  WHERE id = '$target'";
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