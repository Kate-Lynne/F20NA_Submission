<?php
$username = filter_input(INPUT_POST, 'uname');
$password = filter_input(INPUT_POST, 'psw');
$firstname = filter_input(INPUT_POST, 'fname');
$lastname = filter_input(INPUT_POST, 'lname');
$job = filter_input(INPUT_POST, 'job');
$location = filter_input(INPUT_POST, 'country');
$dob = filter_input(INPUT_POST, 'dob');

if(!empty($username)){
if(!empty($password)){
if(!empty($firstname)){
if(!empty($lastname)){
if(!empty($job)){
if(!empty($location)){
if(!empty($dob)){

	$dob = date("Y-m-d",strtotime($dob));

	$host = "sql2.freemysqlhosting.net:3306";
	$dbusername = "sql2285793";
	$dbpassword = "kZ1!hX1*";
	$dbname = "sql2285793";

	// Create connection
	$conn =new mysqli($host, $dbusername, $dbpassword, $dbname);

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	else{

		//Check that the username does not already exist
		$checkStmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
		$checkStmt->bind_param("s", $username);
		if($checkStmt->execute()){

			$result = $checkStmt->get_result();
			$checkStmt->close();
			if(mysqli_num_rows($result) == 0){ //Username doesn't exist in the database yet

				$stmt = $conn->prepare("INSERT INTO users (username, firstname, password, lastname, job, location, dob) values (?, ?, ?, ?, ?, ?, ?)");
				$stmt->bind_param("sssssss", $username, $firstname, $password, $lastname, $job, $location, $dob);

				if($stmt->execute()){
					echo "New record added successfully";
					$stmt->close();

					$stmt2 = $conn->prepare("SELECT id FROM users WHERE username= ?");
					$stmt2->bind_param("s", $username);
					if($stmt2->execute()){

						$result = $stmt2->get_result();
						if(mysqli_num_rows($result) != 1){
							echo "Too many records returned";
							die();
						}
						else{
							$resultArray = $result->fetch_all();


							session_start();
							$_SESSION['username'] = $username;
							$_SESSION['userID'] = $resultArray[0][0];

							$stmt2->close();
							$conn->close();

							header("Location: uploadProfilePic.php");
							die();
						}

					}
					else{
						echo "Problem with returning the user ID";
						die();
					}

				}
				else{
					echo "New record not added successfully";
					die();
				}


			}
			else{
				echo "The username you've chosen already exists";
				die();
			}

		}
		else{
			echo "newusersafe.php:: Check statement didn't execute correctly";
			die();
		}

	}


}
else{
echo "Date of Birth should not be empty";
die();
}
}
else{
echo "Location should not be empty";
die();
}
}
else{
echo "Job should not be empty";
die();
}
}
else{
echo "Lastname should not be empty";
die();
}
}
else{
echo "Firstname should not be empty";
die();
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
