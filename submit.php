<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"SELECT * from `user` where id='$id'");
	$row=mysqli_fetch_array($query);
?>