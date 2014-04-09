<?php

$connect =mysql_connect("localhost","root","password") or die("Couldn't connect.");
//$sub = $_POST[0];
mysql_select_db("akosha",$connect) or die("Couldn't find database");
//$result = mysql_query("SELECT * FROM feeds");

$a=$_GET['post'];
$id=$_GET['id'];
$created_time_full=$_GET['created_time'];
$user_id=$_GET['user_id'];
$type='facebook';
$comma_separated = explode(",", $a);
$comma_separated_id=explode(",",$id);
$created_time=explode(",",$created_time_full);
	
	for($j=0;$j<count($comma_separated);$j++)
	{$postfull_id=explode("_",$comma_separated_id[$j]);
	$post_id=$postfull_id[1];
	$page_id=$postfull_id[0];
	
$inserting_db=mysql_query("INSERT INTO akosha_post (user_id,type,message,post_id,page_id,created_time) VALUES ('$user_id','$type','$comma_separated[$j]','$post_id','$page_id','$created_time[$j]')");
}

$i=0;

/*while($row = mysql_fetch_array($result))
{
$key[$i] = $row['data'];


echo $key[$i];
$i++;
}*/
//echo $_GET['post'];
mysql_close($connect);
?>

