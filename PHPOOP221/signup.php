<?php
require_once('classes/database.php');
$con = new database();
 
session_start();
if(isset($_POST['signup'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $birthday = $_POST['birthday'];
  $sex = $_POST['sex'];
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $confirm =$_POST['confirm'];

  if($password == $confirm ){
    if ($con->signup($firstname, $lastname, $birthday, $sex,$username, $password)){
        header('location:login.php');
}else {
    echo 'Message already exist. Please choose a unique email';
  }
 } else {
    echo 'Error occured while signing in. Please try again.';
  }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
 

<div class="container-fluid rounded shadow login-container">
  <h2 class="text-center mb-4">Sign-Up</h2>
  <form method="post">
  <div class="mb-3">
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" name="firstname" placeholder="Enter your first name" >
    </div>
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" name="lastname" placeholder="Enter you last name">
    </div>
        <label for="birthday" class="form-label">Birthday:</label>
        <input type="date" class="form-control" name="birthday">
    </div>
    <div class="mb-3">
        <label for="sex" class="form-label">Sex:</label>
        <select class="form-select" name="sex">
        <option selected disabled>Select Sex</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" name="user" placeholder="Enter your name" >
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="pass" placeholder="Enter password">
    </div>
    <div class="form-group">
      <label for="password">Confirm Password:</label>
      <input type="password" class="form-control" placeholder="Confirm your password" name="confirm">
    </div>
    

    <div class= "container">
     <input type="submit" value="Sign Up" class="btn btn-danger btn-block" name="signup"></input>
  </form></div>


 
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>