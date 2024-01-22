<?php
session_start();
include 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `cart` WHERE `product_id`=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:cartdemo.php');

        //echo "Delete";
    } else {
        echo "error";
    }
}
