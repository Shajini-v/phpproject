<!-- form : data insert into db -->
<?php 
require("connection.php");
//.............['input name']
$name=$_REQUEST["c_name"]; 
$size=$_REQUEST["c_size"];
$amt=$_REQUEST["c_amount"];
$offer=$_REQUEST["c_offer"];
$category=$_REQUEST["c_category"];
$file=$_FILES["c_image"] ["name"];
//...............................tbname......(c name)...................................values...(variable)
$result= $con -> query("insert into product(name, size, amount, offer, category,  image) values ('$name','$size', '$amt', '$offer', '$category', '$file')");
///insert and update intha method.
$count = mysqli_affected_rows($con);
// .......................['']...........................folder name.
move_uploaded_file($_FILES["c_image"]["tmp_name"],"imageproduct/".$file); 
if($count>0)
{
    header("location:addproduct.php");
}
else{ 
        header("Location: index.php");

    }
?>