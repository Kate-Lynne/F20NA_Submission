<?php
$username = filter_input(INPUT_GET, 'uname');
$password = filter_input(INPUT_GET, 'psw');
session_start();

if (!empty($username)){

	if (!empty($password)){

		$host = "sql2.freemysqlhosting.net:3306";
		$dbusername = "sql2285793";
		$dbpassword = "kZ1!hX1*";
		$dbname = "sql2285793";

		// Create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()){
			die("Connection failed: " . $conn->connect_error);
			die();
		}
		else{
			$stmt = $conn->prepare("SELECT id, profilepicurl FROM users WHERE password= ? AND username= ?");
			$stmt->bind_param("ss", $password, $username);
			if($stmt->execute()){
				$result = $stmt->get_result();
				if(mysqli_num_rows($result)==0){
					echo "Username or Password incorrect.";
					die();
				}
				else if(mysqli_num_rows($result)==1){

					$row = $result->fetch_all();
					$_SESSION['userID'] = $row[0][0];
					$_SESSION['profileToLoad'] = $row[0][0];
					$_SESSION['loginProfilePic'] = $row[0][1];

					header("Location: getuserprofile.php");
					die();

				}
				else if(mysqli_num_rows($result) > 1){
					echo "Too many rows returned";
					die();
				}

				$stmt->close();
				$conn->close();
			}
			else{
				echo "Statement not executed properly";
				die();
			}
		}
	}
	else{
		echo "Password should not be empty";
		die();
	}
}
else{
	echo "Username should not be empty";
	die();
}
?>
