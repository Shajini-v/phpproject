<?php 
//db connection
$con = mysqli_connect("localhost", "root", "", "ecommerce");
if(!$con){
    die("connection failed");
}

//session for temporary storage.
session_start();
$email=$_REQUEST["email"];
$password=$_REQUEST["psw"];
// ................................tbname...........c name......variable.
$res= $con -> query("select * from `login`  where `email_id` = '$email' AND `password` = '$password' ");
$count =$res->num_rows;
if($count>0)
{
    //session value pass.
    $_SESSION["username"]= $email; 
    header("location:main.php");
}
else{
    echo "<script type='text/javascript'>alert('Username or Password incorrect.');window.location.href='index.php';</script>";   
    // header("Location: index.php");
    }
?>
 
