<?php

$con = mysqli_connect('localhost', 'root', '', 'login');


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone =  $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO student ( name , phone , email )
            VALUES  ('$name' , '$phone' , '$email' )";

    if (mysqli_query($con, $sql)) {
        echo ' Data Inserted';
        header('location:index.php');
    } else {
        echo 'Sorry';
    }
}