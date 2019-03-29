<?php

$host = "sql2.freemysqlhosting.net:3306";
$dbusername = "sql2285793";
$dbpassword = "kZ1!hX1*";
$dbname = "sql2285793";
$resultArray = array();
session_start();

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die("Connection failed: " . $conn->connect_error);
}
else{
	$stmt = $conn->prepare("SELECT * FROM `images` WHERE `userID` = ? ORDER BY timestamp ASC");
	$stmt->bind_param("i", $_SESSION['profileToLoad']);

	if($stmt->execute()){
		$result = $stmt->get_result();
		if(mysqli_num_rows($result)==0){
			echo "No rows returned for the timeline";
			unset($_SESSION['photosResultArray']);
			header("Location: gettimeline.php");
			die();
		}
		else{
			echo "Rows returned for timeline";
			unset($_SESSION['photosResultArray']);

			for($i = 0; $i<(mysqli_num_rows($result) * 4); $i += 4){

				$row = $result->fetch_assoc();

				$resultArray[$i+0] = $row['userID'];
				$resultArray[$i+1] = $row['url'];
				$resultArray[$i+2] = $row['name'];
				$resultArray[$i+3] = $row['timestamp'];

			}

		}


		$stmt->close();
		$conn->close();

		$_SESSION['photosResultArray'] = $resultArray;

		echo "<br>";
		echo $_SESSION['photosResultArray'][0];
		echo "<br>";
		echo $_SESSION['photosResultArray'][1];
		echo "<br>";
		echo $_SESSION['photosResultArray'][2];
		echo "<br>";
		echo $_SESSION['photosResultArray'][3];
		echo "<br>";

		header("Location: gettimeline.php");
		die();
	}
	else{
		echo "Statement not executed properly";
		die();
	}
}

?>
