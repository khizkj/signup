<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'base/connect.php';


    $username = $_POST["uname"];
    $password = $_POST["upassword"];
    $confirmpassword = $_POST["ucpassword"];
    $fname = $_POST["fname"];
    $useremail = $_POST["uemail"];




    $sqlemail = "select * from info where Email='$useremail'";

    $result = mysqli_query($connection, $sqlemail);

    $row = mysqli_num_rows($result); //1

    if ($row > 0) {
        echo "useremail already exist";
    } else {

        if ($password == $confirmpassword) {

            $hashpass = password_hash($password,PASSWORD_DEFAULT);

            $sqlinsert = "INSERT INTO `info`( `Name`, `password`, `fullname`, `email`) VALUES ('$username','$hashpass','$fname','$useremail')";

            $resultins = mysqli_query($connection, $sqlinsert);
            if ($resultins) {
                echo "inserted";
            }
        } else {
            echo "password doesnot match";
        }
    }
}

