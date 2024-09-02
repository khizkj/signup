<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "signupsystem";

$connection = mysqli_connect($server, $username, $pass, $db);

if (!$connection) {
    die("connection is failed " . mysqli_connect_error());
}
$sqldb = "create database if not exists signupsystem";

$res = mysqli_query($connection, $sqldb);

if ($res)
$sqltbl = "create table if not exists info(
Id int primary key not null auto_increment,
Name varchar(255),
password varchar(255),
fullname varchar(255),
email varchar(255)
)";

$res = mysqli_query($connection, $sqltbl);
