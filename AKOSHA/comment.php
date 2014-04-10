<?php
//$comment_post_id='1410135859256991';
//$comment_post_message='HEYY';
//echo $comment_post_message.$comment_post_id;
$comment_post_id=$_GET['post_id'];
$comment_post_message=$_GET['post'];
$connect =mysql_connect("localhost","root","password") or die("Couldn't connect.");
//$sub = $_POST[0];
mysql_select_db("akosha",$connect) or die("Couldn't find database");

$insert_db=mysql_query("UPDATE akosha_post SET comment= '$comment_post_message' WHERE post_id='$comment_post_id'");

//$inserting_db=mysql_query("UPDATE akosha_post (comment) VALUES ('$comment_post_message') WHERE post_id='$comment_post_id'");

mysql_close($connect);
?>