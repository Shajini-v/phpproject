<?php
require("connection.php");
// .............input name
$id = $_REQUEST['id'];
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$phone_number = $_REQUEST['phone_number'];
$password = $_REQUEST['password'];
$reg_email = $_REQUEST['reg_email'];
$country = $_REQUEST['country'];
$state = $_REQUEST['state'];
    // .........................................C name='$variable'.
    $result= $con ->query("UPDATE  register set `first_name`= '$first_name', `last_name` = '$last_name', `phone_number` = '$phone_number', `password` = '$password',
     `reg_email` = '$reg_email', `country`= '$country', `state`='$state' WHERE id='$id'");

    $count = mysqli_affected_rows($con);
    if($count>0)
    {
    header("location:viewregister.php");
    }
    else{ 
    echo 'record not updaate';  
    }

    
?> 



    


