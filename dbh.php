<?php
    // include_once 'dbh.inc.php';
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "canteen1";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    // $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $item_name = $_POST['item_name'];
    $price = $_POST['price'];

    $sql = "INSERT INTO menu (item_name, price) VALUES('$item_name', '$price');";
    mysqli_query($conn, $sql);
    header("Location: menu.php?additem=success");
    // if($conn->query($sql) == true){
    //     // echo "Succesfully inserted";
    //     $insert = true;
    // }
    // else{
    //     echo "ERROR: $sql <br> $conn->error";
    // }

    // $conn->close();

?>
