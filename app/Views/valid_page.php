<style type="text/css">
	body{
		color: green;
		font-weight: bold;
		font-size: 2em;
	}
</style>
<?php

// first trial to connect to fbsql_database

// 	echo $username = filter_input(INPUT_POST, 'name');
// 	echo $password = filter_input(INPUT_POST, 'password');
// 	if(!empty($username)){
// 		if(!empty($password)){
// 			$host = "localhost";
// 			$dbusername = "root";
// 			$dbpassword = "";
// 			$dbname = "onlinemd";

// $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
// 	if (mysqli_connect_error()){
// 		die('Connect Error ('.mysqli_connect_error() .')'
// 			. mysqli_connect_error());
// 	}
// 	else{
// 		$sql = "INSERT INTO account (name, password)
// 		values('$username', '$password')";
// 		if ($conn->query($sql)){
// 			echo "New record is Inserted Bruv!";
// 		}
// 		else{
// 			echo "Error: ". $sql . "<br>". $conn->error;
// 		}
// 		$conn->close();
// 	}
// 		}
// 		else{
// 			echo "password is required!";
// 			die();
// 		}

// 	}
// 	else{
// 		echo "Username should not be Empty!";
// 		die();
// 	}


// Another Trial to connect to database!

	// Real validation session_commit()
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$password = $_POST['password'];

	// connect a fbsql_database(link_identifier)
	$dbconnect=mysqli_connect('localhost','root','','onlinemd');

	$sql = mysqli_query ($dbconnect, "insert into economics_students(s/n,name,password) values('', '$name', '$password')");
	if($sql){
		echo "Data Inserted Successfully!";
	}
	else{
		echo "Failed to Insert!";
	}
}
?>