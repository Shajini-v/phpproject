<?php
require("connection.php");
$id = $_REQUEST["del"];
//.............................................c name =$id.
$res = $con -> query("SELECT *FROM `category` WHERE category_id = $id");
$count = $res->num_rows;
if($count > 0)
    $row = $res -> fetch_assoc();
//...................cname
    $upload = $row["image"];
    //...........folder name
    unlink("imagecategory/$upload");
    // ............................tb name........c name
    $res=$con->query("DELETE FROM category where category_id='$id'");
    $count=mysqli_affected_rows($con);
if($count >0){
    header("location:viewcategory.php");
}
else{ 
        echo 'record not deleted';
    }
?>