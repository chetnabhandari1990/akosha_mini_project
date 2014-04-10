<?php 
$user_id=$_GET['user_id'];
//$user_id='1';
$connect =mysql_connect("localhost","root","password") or die("Couldn't connect.");

mysql_select_db("akosha",$connect) or die("Couldn't find database");

$i=0;
$result=mysql_query("SELECT type,message,post_id,page_id,created_time,comment FROM akosha_post WHERE user_id='$user_id' ORDER BY created_db_time DESC");
$key=array();
while($row = mysql_fetch_array($result))
	{

		$array = [
		"message" => $row['message'],
		"type" => $row['type'],
		"post_id_full" => $row['page_id']."_".$row['post_id'] ,
		"post_id" => $row['post_id'],
		"comment" => $row['comment']
		];
		$key[$i] = $array;
	
	$i++;
}

echo json_encode($key);
?>
