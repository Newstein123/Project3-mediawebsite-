

    


<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "voice");


// if (isset($_SESSION['logincount'])) {
//     if ($_SESSION['logincount'] >= 5) {
//         echo "<script>window.alert('Please try again in 10 minutes.')</script>";
//         echo "<script>window.location='logintimer.php'</script>";
//     }
// } elseif (!isset($_SESSION['logincount'])) {
//     $_SESSION['logincount'] = 0;
// }

if (isset($_POST['btnlogin'])) {
    $email = $_POST['txtemail'];
    $password = md5($_POST['txtpassword']);

    $select = "SELECT * FROM Customers
       WHERE Email='$email'
       AND Password='$password'";

    $run = mysqli_query($connect, $select);
    $user = mysqli_fetch_assoc($run);
    if($user) {
      $user = $_SESSION['user'];
      $_SESSION['auth'] = true;
      echo "<script>window.alert('Customer log in successful!')</script>";
      echo "<script>window.location ='index.php'</script>";
    } else {
      echo "<script>window.alert('Incorrect Password or Email')</script>";
      echo "<script>window.location ='login.php?" . $_SESSION['CustomerID'] . "'</script>";
    }
    // $count = mysqli_num_rows($run);
    // $arr = mysqli_fetch_array($run);
    // if ($count == 1) {
    //     $_SESSION['CustomerID'] = $arr['CustomerID'];
    //     $_SESSION['Email'] = $arr['Email'];
    //     $_SESSION['CustomerName'] = $arr['CustomerName'];

       
    // } else {
    //     $_SESSION['logincount']++;
    //     echo "<script>window.alert('Incorrect Password or Email. Login Interval Time:" . $_SESSION['logincount'] . ". Login Fail can only be 5 times.')</script>";
       
    // }
}



?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" type="text/css" href="Home.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<title>UserLogin</title>
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
      line-height: 50px;
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
</style>



</head>
<body>

<div  class="modal">
  <form class="modal-content1" action="" method="post">
    <div class="mcontainer">
      <h1>Login</h1>
      <p style="color:red;"> * Please fill in this form to login an account.</p>
      <label for="email"><b>Email</b></label>
      <input type="text" name="txtemail" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" name="txtpassword" placeholder="Enter Password" name="password" required>

       
       
      
     

      <p style="font-size:12px; text-align:center;">By loging an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="flex">
      	<a href="index.php"><button type="button"  class="cancelbtn text-white">Cancel</button></a>
        <button type="submit" name="btnlogin" class="loginbtn text-white"   value="Check" >Login</button>
      </div>
    </div>
  </form>
</div>



</body>
</html>