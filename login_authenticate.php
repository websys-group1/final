<meta charset="utf-8" />
<?php	
	include "./db2.php";
	include "./password.php";

	//if empty, let the user know
	if($_POST["username"] == "" || $_POST["password"] == ""){
		echo '<script> alert("Type your ID or Password"); history.back(); </script>';
	}else{
        // store your password passed in by POST and query it.
	$password = $_POST['password'];
	$sql = mq("select * from users where username='".$_POST['username']."'");
	$member = $sql->fetch_array();
	$hash_pw = $member['password']; // store hashed password passed by POST into $hash_pw

	if(password_verify($password, $hash_pw)) 
	{   // if the session id/pw matches the passed in(from database) values, save the session and go to posts.php page.
		$_SESSION['username'] = $member["id"];
		$_SESSION['password'] = $member["pw"];

		echo "<script>alert('logged in.'); location.href='./posts.php';</script>";
	}else{ // if the password doesn't match, go back
		echo "<script>alert('Check if your inputs are valid.'); history.back();</script>";
	}
}
?>