<?php

include 'conn.php';
error_reporting(0);

if(isset($_POST['done'])){
     $name = $_POST['name'];
     $email = $_POST['emailid'];
     $mobile = $_POST['mobileno'];
     $dob = $_POST['dateofbirth'];
     $pin = $_POST['pincode'];
     $q = "INSERT INTO `information`(`Name`, `Email id`, `Mobile No.`, `Date Of Birth`, `Pin Code`) VALUES ('$name' , '$email' , ' $mobile' , '$dob' , '$pin')";

     $query = mysqli_query($con,$q);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>


	<div class="col-lg-6 m-auto">
		<form method="post">
			<br><br><div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white text-center"> Insert Operation </h1>
				</div><br>
				<label> Name </label>
				<input type="text" name="name" class="form-control"><br>
				
				<label> Email Id </label>
				<input type="text" name="emailid" class="form-control"><br>
				
				<label> Mobile No. </label>
				<input type="integer" name="mobileno" class="form-control"><br>
				
				<label> Date Of Birth </label>
			    <input type="Date" name="dateofbirth" class="form-control"><br>
				
				<label> Pin Code </label>
				<input type="integer" name="pincode" class="form-control"><br>
				
				<button class="btn btn-success" type="submit" name="done"> Submit</button><br>

			</div>
		</form>
	</div>



</body>
</html>