<?php
$user_id=1;
//$user_id=$_GET['user_id'];
$connect =mysql_connect("localhost","root","password") or die("Couldn't connect.");

mysql_select_db("akosha",$connect) or die("Couldn't find database");
$result = mysql_query("SELECT * FROM akosha_post WHERE user_id='$user_id' and type='facebook' limit 1" );
if (mysql_num_rows($result) == 0)
	{
	echo 0;
	}
	
else{
	$i=0;
	$row=mysql_fetch_array($result);
	echo $row['created_time'];
	}


?>