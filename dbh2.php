<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "canteen1";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    $item_name = $_POST['item_name'];

    $sql = "DELETE FROM menu where item_name='$item_name';";
    mysqli_query($conn, $sql);
    header("Location: menu.php?additem=success");