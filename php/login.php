<?php
session_start();
$login = ["marina@irony.org" => "blablabh", "marina@gmail.com" => "happy", "me@no.com" => "passthru"];
if($_POST) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sanEmail=filter_var($username,FILTER_SANITIZE_EMAIL);
//	$valEmail=filter_var($sanEmail,FILTER_VALIDATE_EMAIL);

	$sanPass=filter_var($password,FILTER_SANITIZE_URL);

	if (array_key_exists($sanEmail, $login)) {
		if($login[$sanEmail] == $sanPass) {
			$_SESSION['success']=true;
			header("Location: ../login.html");
			
		}
		else $error="Wrong password.";
	}
	else $error="Wrong username.";

}

?>

<!DOCTYPE html>
<html>	
<head>
	<title>Please login</title>
</head>
<body>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
<p>Username: <input type="text" name="username"></p>
<p>Password: <input type="password" name="password"></p>
<div><?php if (isset($error)) echo $error?></div>
<input type="submit" value="Login">

</body>

</html>