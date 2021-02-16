<style type="text/css">
	body{
		color: green;
		font-weight: bold;
		font-size: 2em;
	}
</style>
<?php
// Simple connection to database 1
	// $user = 'root';
	// $pass = '';
	// $db = 'onlinemd';
	// $db = new mysqli('localhost', $user, $pass, $db) or die('Unable to connect');
	// echo "Nice one Bruv!!";
	// end of a successful simple connection

	// Another connection and Insertion of Data 2
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'onlinemd';

	$con = mysqli_connect($host, $user, $pass, $db);
	if($con)
		echo "Connection was successful!";
	$sql = "insert into names_of_staff(username,password,email) values ('David', 12345, 'davidsarka242@outlook.com')";
	$query=mysqli_query($con,$sql);
	if($query)
	echo "data inserted successfully";

?>