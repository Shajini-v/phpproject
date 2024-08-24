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
							<h5 class="text-center mb-4" style="color:orange; font-weight:bold; font-size:50px;">Register Now </h5>
							<div class="login p-5 bg-dark mw-100">
								<form  action="addregister_action.php" method="post" enctype="multipart/form-data" style="width:50%; margin:0px auto;">
                                <div class="form-group">
										<label class="mb-2">First Name :</label>
										<input type="text" name="first_name" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
                                    <div class="form-group">
										<label class="mb-2">Last Name  :</label>
										<input type="text"  name="last_name" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
                                    <div class="form-group">
										<label class="mb-2">Phone Number :</label>
										<input type="text" name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
                                    <div class="form-group">
										<label class="mb-2">Password :</label>
										<input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<div class="form-group">
										<label class="mb-2">Email address :</label>
										<input type="email" name="reg_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>	
									
									
									<div class="form-group">
											<label for="country">Select Country:</label>
											<select id="country" name="country">
												<?php
												$con = new mysqli("localhost", "root", "", "ecommerce");
												if ($con->connect_error) {
													die("Connection failed: " . $con->connect_error);
												}

												$result = $con->query("SELECT * FROM countries");
												if ($result->num_rows > 0) {
													while ($row = $result->fetch_assoc())
													 {
														?>
														<option value="<?php  echo $row['cont_id']?>"><?php echo $row['name'];?></option>
														<?php
													}
												}
												?>
											</select>
										</div>


										<div class="form-group">
											<label for="state">State:</label>
											<select id="state" name="state">
												<option>Select state</option>
											</select>
										</div>

										
									<button type="submit" class="btn btn-primary submit mb-4" style="width:100%;">Register Now</button>

				
								</form>
							</div>
							<!---->
						</div>
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