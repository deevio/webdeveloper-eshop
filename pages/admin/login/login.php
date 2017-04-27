<?php
session_start();

require_once 'connection.php';

if( isset($_SESSION["user"]) ) {
	header("Location: ./");
}


$user 		= $_POST["user"];
$pass 		= $_POST["pass"];
$message 	= '';


if(!empty($user) and !empty($pass) ){	

	$sql = "SELECT id,user,pass,permission FROM $table WHERE user = :user"; 
	$records =  $conn->prepare($sql);
	$records->bindParam(':user', $user);
	$records->execute()	;
	$results = $records->fetch(PDO::FETCH_ASSOC);	

	if( count($results) > 0 and password_verify( $pass, $results["pass"]) ) {

		$_SESSION["user"] 				= $results["id"];
		$_SESSION["user_permission"] 	= $results["permission"];

		header("Location: ./");

	} else {
		$message = "Wrong cred.";
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP login script</title>
</head>
<body>

<a href="./">Home</a> <br>
<?php
if( !empty($message) ) {
	echo $message;
}
?>
<form action="login.php" method="post">
	User name: <input type="text" name="user" />
	Password: <input type="password" name="pass" />
	<input type="submit" name="submit" value="Login">
</form>

	
</body>
</html>