<?php
include 'conn.php';
error_reporting(0);

if(isset($_POST['done'])){
     $name = $_POST['name'];
     $email = $_POST['emailid'];
     $mobile = $_POST['mobileno'];
     $dob = $_POST['dateofbirth'];
     $pin = $_POST['pincode'];
     $q = "select * from information";

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

	<div class="container">
		<div class="col-lg-12">
            <br><br>
			<h1 class="text-warning text-center">Table data</h1>
			<table class="table table-striped table-hover table-bordered">
				<tr class="bg-dark text-white text-center">
					<th>SlNo</th>
					<th>Name</th>
					<th>Email Id</th>
					<th>Mobile No.</th>
					<th>Date Of Birth</th>
					<th>Pin Code</th>
					<th>Delete</th>
					<th>Update</th>
				</tr>
    <?php
       include 'conn.php';
        $q = "select * from information";

        $query = mysqli_query($con,$q);
       
       while($res = mysqli_fetch_array($query)){


    ?>



				<tr class="text-center">
					<td> <?php echo $res['SlNo']; ?></td>
					<td><?php echo $res['Name']; ?></td>
					<td><?php echo $res['Email id']; ?></td>
					<td><?php echo $res['Mobile No.']; ?></td>
					<td><?php echo $res['Date Of Birth']; ?></td>
					<td><?php echo $res['Pin Code']; ?></td>
					<td><button class="btn-danger btn"><a href="delete.php?SlNo=<?php echo $res['SlNo']; ?>" class="text-white">Delete</a> </button></td>
					<td><button class="btn-primary btn"><a href="update.php?SlNo=<?php echo $res['SlNo']; ?>" class="text-white">Update</a> </button></td>


				</tr>
				<?php 

                }
				?>
			</table>
    


	</body>
</html>