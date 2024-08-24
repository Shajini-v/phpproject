<!-- form : data insert into db -->
<?php 
require("connection.php");
//.............['input name']
$name=$_REQUEST["eye_name"];
$file=$_FILES["eye_image"] ["name"];
//...................................tbname...(c name).....values...(variable)
$result= $con -> query("insert into category(category_name, image) values ('$name','$file')");
///insert and update intha method.
$count = mysqli_affected_rows($con);
// .......................['input name']................folder name.
move_uploaded_file($_FILES["eye_image"]["tmp_name"],"imagecategory/".$file); 
if($count>0)
{
    header("location:viewcategory.php");
}
else{ 
        // header("Location: index.php");
        echo 'eye image not succesfully added.';
    }
?>


