<!-- form : data insert into db -->
<?php 
require("connection.php");
//.............['input name']
$first_name=$_REQUEST["first_name"];
$last_name=$_REQUEST["last_name"]; 
$phone_number=$_REQUEST["phone_number"]; 
$password=$_REQUEST["password"]; 
$reg_email=$_REQUEST["reg_email"]; 
$country=$_REQUEST["country"]; 
$state=$_REQUEST["state"]; 
//...............................tbname......(c name)...................................values...(variable)
$result= $con -> query("insert into register(first_name, last_name, phone_number, password, reg_email, country, state) values
 ('$first_name', '$last_name', '$phone_number', '$password', '$reg_email', '$country', '$state')");
///insert and update intha method.
$count = mysqli_affected_rows($con);
if($count>0)
{
    header("location:register.php");
}
else{ 
echo "error to add data in database";
    }
?>