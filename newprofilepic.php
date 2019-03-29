<?php
$url = filter_input(INPUT_POST, 'url');
$userID = filter_input(INPUT_POST, 'userID');

if (!empty($url)){
	
				$host = "sql2.freemysqlhosting.net:3306";
				$dbusername = "sql2285793";
				$dbpassword = "kZ1!hX1*";
				$dbname = "sql2285793";

				// Create connection
				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

				if (mysqli_connect_error()){
					die('Connect Error ('. mysqli_connect_errno() .') '
					. mysqli_connect_error());
				}
				else{

					$stmt = $conn->prepare("UPDATE users SET profilepicurl= ? WHERE id=?");
					$stmt->bind_param("si", $url, $userID);


					if ($stmt->execute()){
						$stmt->close();
						$conn->close();

						session_start();
						$_SESSION['userID'] = $userID;
						$_SESSION['profileToLoad'] = $userID;
						$_SESSION['loginProfilePic'] = $url;

						header("Location: getuserprofile.php");
					}
					else{
						echo "Error: ". $sql ."
						". $conn->error;
						die();
					}

					$conn->close();
				}
}
else{
	echo "URL should not be empty";
	die();
}
?>
