<?php
$ID= $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "shimuafrin",
    "std_form");

$query ="DELETE FROM `std_form` . `Form` WHERE `Form` . `ID`=$ID";

mysqli_query($link, $query);

header('location:list.php');
?>

