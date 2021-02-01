<style type="text/css">
	body{
		color: green;
		font-weight: bold;
		font-size: 2em;
	}
</style>
<?php
	// echo "Username: " . $_POST['name'] . '<br />';
	// echo "Password: " . $_POST['password'] . '<br />';
	// echo "Username: " . $_POST['name'] . '<br />';
	// echo "Password: " . $_POST['password'];

	// Real validation session_commit()
	
	$user = "root";
	$pass = "";
	$db = "onlinemd";

	$db = new mysqli("localhost", $user, $pass, $db) or die("Unable to Connect Ogah!");

	echo "Great Work OnlineMD!!";

	


?>