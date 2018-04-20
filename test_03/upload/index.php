<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db("v-u-a-p");

if(isset($_POST['submit']))
{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	
	move_uploaded_file($temp,"uploaded/".$name);
	$url = "http://127.0.0.1/upload/uploaded/$name";
	mysql_query("INSERT INTO `videos` VALUE ('','$name','$url')");
}

?>