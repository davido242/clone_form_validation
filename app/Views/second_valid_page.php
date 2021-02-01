<style type="text/css">
	body{
		color: green;
		font-weight: bold;
		font-size: 2em;
	}
</style>
<?php
	echo "Username: " . $_POST['name'] . '<br />';
	echo "Password: " . $_POST['password'];
	echo "Username: " . $_POST = ('name') . '<br />';
	echo "Password: " . $_POST = ('password');

	// Real validation session_commit()
	$name = $_POST['name'];
	$password = $_POST['password'];

	// connect a fbsql_database(link_identifier)
	$dbconnect=mysqli_connect('localhost','root','','onlinemd');
	if(mysqli_connect_error($dbconnect)){
		echo "Failed to connect";
	}else{
		echo "Connected successfully";
	}
?>