<?php
require("connection.php");
$id = $_REQUEST["dell"];
//.............................................c name =$id.
$res = $con -> query("SELECT *FROM `register` WHERE id = $id");
$count = $res->num_rows;
if($count > 0)
    $row = $res -> fetch_assoc();
    // ............................tb name
    $res=$con->query("DELETE FROM register where id='$id'");
    $count=mysqli_affected_rows($con);
if($count >0){
    header("location:viewregister.php");
}
else{ 
        echo 'record not deleted';
    }
?>