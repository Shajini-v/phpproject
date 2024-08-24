<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Goggles Ecommerce Category Bootstrap responsive Web Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script src="jquery-3.7.1.min.js"></script>
	<link href="css\bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>
<body style="">
<div class="wrap">
    
<?php
require("connection.php");
$id = $_REQUEST["varr"];
$result = $con->query("SELECT * FROM register WHERE id = $id");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>    
<div class="wrap">
    <h5 class="text-center mb-4" style="color:darkblue; font-weight:bold; font-size:30px;">UPDATE FORM</h5>
    <div class="login p-5 bg-dark mw-100">
        <form action="updateregister.php" method="post" enctype="multipart/form-data" style="width:50%; margin:0px auto;">
            <div class="form-group">
                <label>ID :</label>
                <input  type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>"> 
            </div>
            <div class="form-group">
                <label class="mb-2">First Name :</label>
                <input type="text" name="first_name" class="form-control" required value="<?php echo $row['first_name']; ?>">
            </div>
            <div class="form-group">
                <label class="mb-2">Last Name :</label>
                <input type="text" name="last_name" class="form-control" required value="<?php echo $row['last_name']; ?>">
            </div>
            <div class="form-group">
                <label class="mb-2">Phone Number :</label>
                <input type="text" name="phone_number" class="form-control" required value="<?php echo $row['phone_number']; ?>">
            </div>
            <div class="form-group">
                <label class="mb-2">Password :</label>
                <input type="password" name="password" class="form-control" required value="<?php echo $row['password']; ?>">
            </div>
            <div class="form-group">
                <label class="mb-2">Email address :</label>
                <input type="email" name="reg_email" class="form-control" required value="<?php echo $row['reg_email']; ?>">
            </div>

            <!-- for country...................................................................................... -->
            <?php
            // require("connection.php");
            // $country = $row["country"];
            // // ................................................c name =$id.
            // $result1 = $con -> query("SELECT* from `countries` WHERE   `cont_id` = '$country'");
            // $count1 = $result1->num_rows;
            // if($count1 > 0){
            // $row1 = $result1 ->fetch_assoc();
            // }
            ?>
            <!-- <div class="form-group">
                <label for="country">Select Country:</label>
                <select style="width:350px;" name="country"> -->
                    <!-- .........................c name -->
                    <!-- <option value="<?php  echo $row1['cont_id']?>"><?php echo $row1["name"];?></option>        -->
                    <?php
					// $con = new mysqli("localhost", "root", "", "ecommerce");
					// if ($con->connect_error) {
					// die("Connection failed: " . $con->connect_error);
					// }
                    // $result = $con->query("SELECT * FROM countries");
					// if ($result->num_rows > 0) {
					// while ($row = $result->fetch_assoc())
					// {
					?>
					<!-- <option value="<?php  echo $row['cont_id']?>"><?php echo $row['name'];?></option> -->
					<?php
					// }
					// }
				    ?>
			    </select>
            </div>
            <!-- for country...................................................................................... -->
            <?php
            require("connection.php");
            $edit=$row["country"];
            $ress=$con->query("select * from `countries` where  `cont_id`='$edit'" );
			$counts = $ress->num_rows;
            if($counts>0)
            {
            $rows=$ress->fetch_assoc();
            }
            ?>
            <div class="form-group" style="margin-left:380px;">
            <label for="inputState">Country</label>
                <select style="padding:10px;width:760px;" id="country" name ="country" class="form-control">
					<option value ="<?php echo $rows['cont_id'];?>"><?php echo $rows['name'];?></option>
                        <?php
                        require("connection.php");
                        $edit=$row["Country"];
                        $res1=$con->query("select * from `countries` where  `cont_id`!='$edit'" );
						$count1 = $res1->num_rows;
                        if($count1>0)
                        {
                        while($row1=$res1->fetch_assoc())
						{
                        ?>
                        <option value="<?php echo $row1 ["cont_id"];?>"><?php echo $row1["name"];?> </option>                 
                        <?php
						}
					    }
                        ?>			
                </select>
            </div>

            <!-- for state...................................................................................... -->
            <?php
            require("connection.php");
            $st1=$row["state"];
            $res2=$con->query("select * from `states` where  `stat_id`='$st1'" );
			$count2 = $res2->num_rows;
            if($count2>0)
            {
            $row2=$res2->fetch_assoc();
            }
            ?>
            <div class="form-group" style="margin-left:380px;">
                <label for="inputState">State</label>
                <select style="padding:5px;width:760px;" id="state" name ="state" class="form-control">
                    <option value ="<?php $row2["stat_id"];?>"><?php echo $row2["sname"];?></option>
                    <?php
                    require("connection.php");
                    $st1=$row["State"];
                    $res3=$con->query("select * from `states` where  `stat_id`!='$st1'" );
					$count3 = $res3->num_rows;
                    if($count3>0)
                    {
                    while($row3=$res3->fetch_assoc())
					{
                    ?>
					<option value ="<?php $row3["stat_id"];?>"><?php echo $row3["sname"];?></option>
					<?php
					}
					}
                    ?>					
                </select>
            </div>  
            <input type="submit" class="btn btn-primary submit mb-4" style="width:100%;"></input>
        </form>
    </div>
</div>
							



<!---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#country').change(function() {
        var country = $(this).val();
        $.ajax({
            url: 'search_state.php',
            type: 'POST',
            data: {country: country},
            success: function(result) {
                $('#state').html(result);
            }
        });
    });
});
</script>

        </body>
</html>



















