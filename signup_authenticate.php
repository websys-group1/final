<?php
	include "./db2.php";
	include "./password.php";

	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$email = $_POST['email'].'@'.$_POST['emadress'];

$sql = mq("insert into users (username,password,name,email) values('".$userid."','".$userpw."','".$username."','".$email."')");

?>
<meta charset="utf-8" />
<script type="text/javascript">alert('Sign Up completed!');</script>
<meta http-equiv="refresh" content="0 url=./posts.php">