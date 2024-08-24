<?php
//this file for db connection.
//$var = mysqli_connect("hostname" ,"username", "password", "dbname");
$con = mysqli_connect("localhost", "root", "", "ecommerce");
if(!$con){
    die("connection failed".mysqli_connect_error());
}
?>