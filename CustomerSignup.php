<?php 
session_start();
include 'connect.php';
include 'preloader.html';
include 'header.php';

if(isset($_POST['btnregister'])) 
{
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$password=$_POST['txtpassword'];
	$phone=$_POST['txtphoneno'];
    $address=$_POST['txtaddress'];

    $selectemail = "SELECT * FROM Customer
    WHERE Email='$email'";
    $checkemail = mysqli_query($connect, $selectemail);
    $countemail = mysqli_num_rows($checkemail);

    if ($countemail > 0) {
        echo "<script>alert('Email in use!')</script>";
        echo "<script>location='Employee_Manage.php'</script>";
    } else {
    
        // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        echo "<script>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.')</script>";
    }else{
        $hashed=md5($password);
	    $insert="INSERT INTO customer(CustomerName,Email,Password,PhoneNumber,Address) 
			     VALUES ('$name','$email','$hashed','$phone','$address')";
	    $runinsert=mysqli_query($connect,$insert);
	    if($runinsert) {
		        echo "<script>alert('Customer Registration Successful!');
				    location.assign('CustomerLogin.php');
			    </script>";
	        }
        }
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/poppins.css">

    <title>Customer Sign up</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
	
</head>
<body>
	<style type="text/css">
	body {
        background-color: rgb(244, 244, 244);
        color: black;
    }

    .space {
        height: 120px;
    }

    .form {
        color: black;
        background-color: white;
        box-shadow: 5px 10px 10px #888888;;
    }

    .form-control {
        border-color: black;
    }

    .form-control::placeholder {
    	color: grey;
    }
	</style>
	<div class="space"></div>
	<form action="CustomerSignup.php" method="POST">
		<div class="container jumbotron form">
                    <legend>
                        <h3>Customer Registration: </h3>
                    </legend>
                    <br>
                    <div class="form-group">
                        <label>Customer's Name</label>
                        <input type="text" name="txtname" class="form-control"
                            placeholder="Customer Name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="txtemail" class="form-control" 
                            placeholder="example@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="txtpassword" class="form-control" 
                                placeholder="********" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="txtphoneno" class="form-control" 
                            placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Address</label>
                        <textarea class="form-control" name="txtaddress" rows="3"
                            required></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="btnregister">
                        <input type="reset" class="btn btn-secondary" name="btnClear">
                    </div>
            </div>
	</form>

	<?php
        include 'footer.html';
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script>
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>
</body>
</html>
