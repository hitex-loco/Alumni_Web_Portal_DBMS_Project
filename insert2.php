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
$company = mysqli_real_escape_string($link, $_REQUEST['company']);

$role = mysqli_real_escape_string($link, $_REQUEST['role']);

$domain = mysqli_real_escape_string($link, $_REQUEST['domain']);

$exp = mysqli_real_escape_string($link, $_REQUEST['exp']);


// attempt insert query execution
$sql = "INSERT INTO profDetails (username, company, role, domain, exp) VALUES ('$uname', '$company', '$role','$domain', '$exp')";
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
<title>Done</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<p align="center"><a href="welcome.php" class="btn btn-primary">Back to Home</a></p>
</body>
</html>
