<h2>Login Successful!</h2>

<?php
	echo $username = filter_input(INPUT_POST, 'name');
	echo $password = filter_input(INPUT_POST, 'password');
	if(!empty($username)){
		if(!empty($password)){
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "onlinemd";

// create a connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	if (mysqli_connect_error()){
		die('Connect Error ('.mysqli_connect_error() .')'
			. mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO account (name, password)
		values('$username', '$password')";
		if ($conn->query($sql)){
			echo "New record is Inserted Bruv!";
		}
		else{
			echo "Error: ". $sql . "<br>". $conn->error;
		}
		$conn->close();
	}
		}
		else{
			echo "password is required!";
			die();
		}

	}
	else{
		echo "Username should not be Empty!";
		die();
	}
?>