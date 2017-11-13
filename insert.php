<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "dbmsproject");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

$uname = $_SESSION['username'];
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);

$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);

$phno = mysqli_real_escape_string($link, $_REQUEST['phno']);

$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);

$batch = mysqli_real_escape_string($link, $_REQUEST['batch']);

 
// attempt insert query execution
$sql = "INSERT INTO basicInfo (username, firstName, lastName, phno, email, dob, batch) VALUES ('$uname', '$first_name', '$last_name','$phno', '$email', '$dob', '$batch')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div align="center">
<div class="span4 well wrapper">
<legend>Fill professional details</legend>
<form action="insert2.php" method="post" class="form-group">
    <p>
        <label for="company">Organization</label><br>
        <input class="form-control" type="text" name="company" id="company">
    </p>
    <p>
        <label for="role">Designation</label><br>
        <input class="form-control" type="text"  name="role" id="role">
    </p>
    <p>
        <label for="domain">Domain</label><br>
        <input class="form-control" type="text" name="domain" id="domain">
    </p>
    <p>
        <label for="exp">Experience in years</label><br>
        <input class="form-control" type="text" name="exp" id="exp">
    </p>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>
</div>
</div>
</body>
</html>
