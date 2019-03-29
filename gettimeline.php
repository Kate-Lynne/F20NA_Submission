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
			$stmt = $conn->prepare("SELECT * FROM timeline ORDER BY timestamp DESC");
			if($stmt->execute()){
				$result = $stmt->get_result();
				if(mysqli_num_rows($result)==0){
					echo "No rows returned for the timeline";
				}
				else{
					echo "Rows returned for timeline";

					for($i = 0; $i<(mysqli_num_rows($result) * 7); $i += 7){

						$row = $result->fetch_assoc();

						$resultArray[$i+0] = $row['userID'];
						$resultArray[$i+1] = $row['url'];
						$resultArray[$i+2] = $row['name'];
						$resultArray[$i+3] = $row['timestamp'];

						$stmt2 = $conn->prepare("SELECT * FROM users WHERE id=?");
						$stmt2->bind_param("i", $row['userID']);

						if($stmt2->execute()){

							$result2 = $stmt2->get_result();

							if(mysqli_num_rows($result)>0){
								$row2 = $result2->fetch_assoc();

								$resultArray[$i+4] = $row2['firstname'];
								$resultArray[$i+5] = $row2['lastname'];
								$resultArray[$i+6] = $row2['profilepicurl'];

							}

						}

						$stmt2->close();

					}

				}


				$stmt->close();
				$conn->close();

				$_SESSION['timelineResultArray'] = $resultArray;

				echo "<br>";
				echo $_SESSION['timelineResultArray'][0];
				echo "<br>";
				echo $_SESSION['timelineResultArray'][1];
				echo "<br>";
				echo $_SESSION['timelineResultArray'][2];
				echo "<br>";
				echo $_SESSION['timelineResultArray'][3];
				echo "<br>";
				echo $_SESSION['timelineResultArray'][4];
				echo "<br>";
				echo $_SESSION['timelineResultArray'][5];
				echo "<br>";
				echo $_SESSION['timelineResultArray'][6];
				echo "<br>";

				header("Location: mainpage.php");
				die();
			}
			else{
				echo "Statement not executed properly";
				die();
			}
		}

?>
