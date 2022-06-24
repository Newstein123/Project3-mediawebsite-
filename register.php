<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "voice");
if (isset($_POST['btnsignup'])) {
    $name = $_POST['txtcustomername'];
    $email = $_POST['txtemail'];
    $password = md5($_POST['txtpassword']);
    $selectemail = "SELECT * FROM Customers
					 WHERE Email='$email'";
    $selectemailrun = mysqli_query($connect, $selectemail);
    $count = mysqli_fetch_array($selectemailrun);

     $selectname = "SELECT * FROM Customers
           WHERE CustomerName='$name'";
    $selectnamerun = mysqli_query($connect, $selectname);
    $count2 = mysqli_fetch_array($selectnamerun);

    if ($count > 0) {
        echo "<script>window.alert('User with this email already exist!')</script>";
        echo "<script>window.location='Initpage.php'</script>";
        
    } elseif ($count2 > 0) {
        echo "<script>window.alert('Username already exist!')</script>";
        echo "<script>window.location='Home.php'</script>";
    } else {
        $insert = "INSERT INTO Customers(CustomerName,Email,Password)
           VALUES('$name','$email','$password')";
        $insertrun = mysqli_query($connect, $insert);

        echo "<script>window.alert('Sign up Successful!')</script>";
         echo "<script>window.location='login.php'</script>";
        
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" type="text/css" href="#.css">
	<title>SignUp</title>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Oswald', sans-serif;
}
    body {
      background-color: black;
    }
    .text-white {
      color: white;
    }
    input {
      padding: 10px;
      border-radius: 10px;
      margin: 10px 0px;
      width: 80%;
      margin-left: 10%;
    }
    label {
      margin-left: 10%;
    }
    button {
      padding: 10px;
      border-radius: 10px;
      margin: 20px 10px;
      background-color: #f9004d;
    }
    .modal {
      width: 100%;
      height: 100vh;
      justify-content: center;
      align-items: center;
      color: white;
    }
  
    form {
      margin: 100px 500px;
    }
    .modal-content1 {
      border: 2px solid #f9004d ;
      border-radius: 10px;
    }
    h1 {
      text-align: center;
      color: #f9004d;
      margin-top: 20px;
    }
    .flex {
      display: flex;
      justify-content: space-between;
    }
    @media (max-width: 992px) {
      form {
        margin: 20px 20px;
      }
    }
  </style>
</head>
<body>
      <div  class="modal">
  <form class="modal-content1" action="" method="post">
    <div class="mcontainer">
      <h1>Sign Up</h1>
      <br><br>
      <p style="color:red;">Please fill in this form to create an account.</p>
<br><br>
      <label for="name"><b>Name</b></label> <br>
      <input type="text" placeholder="Enter Name" name="txtcustomername" required>
      <br>
      <label for="email"><b>Email</b></label> <br>
      <input type="text" placeholder="Enter Email" name="txtemail" required>
<br>
      <label for="psw"><b>Password</b></label> <br>
      <input type="password" placeholder="Enter Password" name="txtpassword" required>
    <br><br>
      <p style="font-size:12px; text-align:center;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
<br>
      <div class="flex">
        <a href="index.php"><button type="button" class="cancelbtn" style="color: white;">Cancel</button></a>
        <button type="submit" name="btnsignup" class="signupbtn" style="color:white" > Sign Up</a> </button>
      </div>
    </div>
  </form>
</div>

</body>
</html>