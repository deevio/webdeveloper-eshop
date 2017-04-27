<?php
session_start();
require_once 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP login script</title>
</head>
<body>

	<?php
	if( isset($_SESSION["user"]) ) :

		$sql = "SELECT id,user,pass FROM $table WHERE id = :id"; 
		$records =  $conn->prepare($sql);
		$records->bindParam(':id', $_SESSION["user"]);
		$records->execute()	;
		$results = $records->fetch(PDO::FETCH_ASSOC);	

	?>
		Hello: <?php echo $results["user"] . ' - ' . $_SESSION["user_permission"]  ?>  <a href="logout.php" title="Logout">Logout</a>
	<?php
	else:
	?>
		<a href="login.php">Login</a> |
		<a href="register.php">Register</a>
	<?php
	endif;
	?>




	
</body>
</html>