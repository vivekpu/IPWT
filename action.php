<?php
	$dbhost="localhost";
	$dbunm="root";
	$conn=mysql_connect($dbhost,$dbunm) or die(mysql_error());
	$dbname="details";
	mysql_select_db($dbname);
	$name=$_POST['name'];
	$age=$_POST['age'];
	$qry="insert into student values('$name',$age)";
	mysql_query($qry) or die(mysql_error());
	echo "record saved";
?>