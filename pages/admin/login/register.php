<?php
session_start();
require_once 'connection.php';

if( isset($_SESSION["user"]) ) {
	header("Location: ./");
}


$user 		= $_POST["user"];
$pass 		= $_POST["pass"];
$message 	= "";

if(!empty($user) and !empty($pass) ){	


	$sql = "INSERT INTO $table (user, pass) VALUES (:user, :pass)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':user', $user);
	$stmt->bindParam(':pass', password_hash($pass, PASSWORD_BCRYPT) );

	if( $stmt->execute() ) {
		$message = "Success";

	} else {
		$message = "Oooh";
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


<a href="./">Home</a><br> 

<?php
if( !empty($message) ) {
	echo $message;
}
?>

<form action="register.php" method="post">
	User name: <input type="text" name="user" />
	Password: <input type="password" name="pass" />
	Confirm password <input type="password" name="confirm_pass" />
	<input type="submit" name="submit" value="Register">
</form>

	
</body>
</html>