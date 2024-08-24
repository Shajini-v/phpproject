<?php
require("connection.php");
$id = $_REQUEST['id'];
// .............input name
$name=$_REQUEST["eye_name"]; 
$file=$_FILES["eye_image"] ["name"];

if(empty($_FILES['eye_image']['name'])){
    //.........................................C name='$variable'.
    $result= $con ->query("UPDATE category set category_name= '$name'  WHERE category_id=$id");
    $count = mysqli_affected_rows($con);
    }
    else{
        $file=$_FILES["eye_image"]["name"];
        // .........................................c name = variable.
        $result= $con ->query("UPDATE category set category_name= '$name',  image='$file' WHERE id=$id");
        move_uploaded_file($_FILES["eye_image"]["tmp_name"],"imagecategory/".$file);
    }
    header("location:viewcategory.php");
?>
