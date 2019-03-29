<?php
session_start();

if (isset($_SESSION['profileToLoad'])){

		$host = "sql2.freemysqlhosting.net:3306";
		$dbusername = "sql2285793";
		$dbpassword = "kZ1!hX1*";
		$dbname = "sql2285793";

		// Create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()){
			die("Connection failed: " . $conn->connect_error);
		}
		else{

			$stmt = $conn->prepare("SELECT `id`, `username`, `firstname`, `lastname`, `password`, `profilepicurl`, `job`, `location`, `dob` FROM `users` WHERE id = ?");
			$stmt->bind_param("i", $_SESSION['profileToLoad']);
			if($stmt->execute()){
				$result = $stmt->get_result();
				if(mysqli_num_rows($result)==0){
					echo "getUserProfile:: No user with specified userID.";
					die();
				}
				else if(mysqli_num_rows($result)==1){

					$row = $result->fetch_assoc();

					$_SESSION['username'] = $row['username'];
					$_SESSION['firstname'] = $row['firstname'];
					$_SESSION['lastname'] = $row['lastname'];
					$_SESSION['profilepicurl'] = $row['profilepicurl'];
					$_SESSION['job'] = $row['job'];
					$_SESSION['location'] = $row['location'];
					$_SESSION['dob'] = $row['dob'];

					echo "firstname = ". $_SESSION['firstname'];
					echo "lastname = ". $_SESSION['lastname'];
					echo "profilepicurl = ". $_SESSION['profilepicurl'];
					echo "location = ". $_SESSION['location'];

					header("Location: getuserphotos.php");
					die();

				}
				else if(mysqli_num_rows($result) > 1){
					echo "getUserProfile:: Too many rows returned";
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
	echo "getUserProfile:: No user ID is stored.";
	die();
}
?>
