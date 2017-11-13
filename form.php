<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<h1 align="center">Hi <b><?php echo $_SESSION['username']; ?></b>, Enter your details</h1><br><br>
<div align="center">
<div class="span4 well wrapper">
<legend>Fill the form</legend>
<form action="insert.php" method="post" class="form-group">
    <p>
        <label for="firstName">First Name</label><br>
        <input class="form-control" type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name</label><br>
        <input class="form-control" type="text"  name="last_name" id="lastName">
    </p>
    <p>
        <label for="mobile">Phone No</label><br>
        <input class="form-control" type="text" name="phno" id="mobile">
    </p>
    <p>
        <label for="emailAddress">Email Address</label><br>
        <input class="form-control" type="text" name="email" id="emailAddress">
    </p>
    <p>
        <label for="dobirth">Date of birth</label><br>
        <input class="form-control" type="date" data-date-inline-picker="true" name="dob" id="dobirth">
    </p>
    <p>
        <label for="batch">Batch</label><br>
        <select class="form-control" name="batch" id="batch">
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
        <option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	</select>
    </p>
    <input type="submit" class="btn btn-primary" value="Next">
</div>
</div>
</form>
</body>
</html>
