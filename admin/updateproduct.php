<?php
require("connection.php");
// .............input name
$id = $_REQUEST['id'];
$name=$_REQUEST["c_name"];
$size=$_REQUEST["c_size"]; 
$amount=$_REQUEST["c_amount"]; 
$offer=$_REQUEST["c_offer"]; 
$category=$_REQUEST["c_category"]; 
$file=$_FILES["c_image"] ["name"];


if(empty($_FILES['c_image']['name'])){
    //.........................................C name='$variable'.
    $result= $con ->query("UPDATE product set name= '$name', size= '$size', amount= '$amount', offer= '$offer', category= '$category' WHERE id=$id");
    $count = mysqli_affected_rows($con);
}
else{
        $file=$_FILES["c_image"]["name"];
        $result= $con ->query("UPDATE product set name= '$name', image='$file' WHERE id=$id");
        move_uploaded_file($_FILES["c_image"]["tmp_name"],"imageproduct/".$file);
    }
    header("location:viewproduct.php");
?>


    