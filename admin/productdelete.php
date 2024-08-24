<?php
require("connection.php");
$id = $_REQUEST["del"];
//.............................................c name =$id.
$res = $con -> query("SELECT *FROM `product` WHERE id = $id");
$count = $res->num_rows;
if($count > 0)
    $row = $res -> fetch_assoc();
//...................cname
    $upload = $row ["c_image"];
    //...........folder name
    unlink("imagecategory/$upload");
    $res=$con->query("DELETE FROM product where id='$id'");
    $count=mysqli_affected_rows($con);
if($count >0){
    header("location:viewproduct.php");
}
else{ 
        echo 'record not deleted';
    }
?>