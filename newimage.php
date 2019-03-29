<?php
$url = filter_input(INPUT_POST, 'url');
$name = filter_input(INPUT_POST, 'name');
$userID = filter_input(INPUT_POST, 'id');

if (!empty($url)){
if (!empty($userID)){

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

					$stmt = $conn->prepare("INSERT INTO images (url, name, userID) VALUES (?, ?, ?)");
					$stmt->bind_param("ssi", $url, $name, $userID);


					if ($stmt->execute()){

						//This section of code checks if there is 10 rows in the timeline database then places the new picture in there.
						//If more than 10 posts, the oldest is removed.

						$stmtCount = $conn->prepare("SELECT name FROM timeline");//Gets count of rows in table
						if($stmtCount->execute()){
							$result = $stmtCount->get_result();

							if(mysqli_num_rows($result) > 9){//Delete oldest result
								$stmtDelete = $conn->prepare("DELETE FROM timeline ORDER BY timestamp ASC LIMIT 1"); //Delete oldest row in the table
								if($stmtDelete->execute()){
									echo "Oldest timeline record has been deleted";
								}
								else{
									echo "There has been a problem deleting the oldest timeline record";
									die();
								}
								$stmtDelete->close();
							}
							$stmtCount->close();

							$stmtTimeIns = $conn->prepare("INSERT INTO timeline (url, name, userID) VALUES (?, ?, ?)");
							$stmtTimeIns->bind_param("ssi", $url, $name, $userID);
							if($stmtTimeIns->execute()){

								//Image entry inserted into timeline table
								$stmtTimeIns->close();
								$stmt->close();
								$conn->close();

								session_start();
								$_SESSION['userID'] = $userID;

								header("Location: getuserprofile.php");

							}
							else{
								echo "newimage.php:: error inserting into the timeline table";
								die();
							}

						}
						else{
							echo "newimage.php:: error executing count statement";
							die();
						}

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
	echo "userID should not be empty";
	die();
}
}
else{
	echo "URL should not be empty";
	die();
}
?>
