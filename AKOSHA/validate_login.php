<?php

// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];

// Connect to the database
$con = mysql_connect("localhost","root","password");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("akosha",$con);

$result = mysql_query("SELECT user_id, password, email FROM customer WHERE email = '$email'");

$row = mysql_fetch_array($result);

if($row['email']==$email && $row['password']==$pass)
  {  echo"You are a validated user.";
	header('Location: newhtml.html?userid='.$row['user_id']); 
	}
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>