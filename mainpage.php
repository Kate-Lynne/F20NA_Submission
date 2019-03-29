<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>EKK</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css" />
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="main.css" />
	<?php
	session_start();
    ?>

	<style>
        html, body, h2, h3, h4, h5 {
            font-family: "Open Sans", sans-serif;
        }

        h1 {
            color: red;
        }
    </style>
</head>


<body class="w3-theme-light" onload="setTimeout(window.scrollTo(0,1),1);">

<!-- Navigation bar -->
<div class="w3-top">
  <div class="w3-bar w3-theme-dark w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-blue" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
	<a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-indigo"><i class="fa fa-home w3-margin-right"></i>Home</a>
	<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Settings"><i class="fa fa-cog"></i></a>
	<div class="w3-dropdown-hover w3-hide-small">
	  <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-red">4</span></button>
	  <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
	    <a href="#" class="w3-bar-item w3-button">Friend request</a>
	    	<img src="Clark.jpg" alt="Clark" class="w3-left w3-circle w3-margin-right" style="height:60px;width:60px">
	    	<p> Clark Kant<p> 
	    	<div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          
	    <a href="#" class="w3-bar-item w3-button">Kate Wood posted a new photo</a>
	    <a href="#" class="w3-bar-item w3-button">Emma Thomson reacted to your post</a>
	    <a href="#" class="w3-bar-item w3-button">Kate-Lynne Macaulay posted a new photo</a>
      </div>
    </div>

  	<a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white">Log Out</a>

  	<form action="redirect.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Profile">
	  	<button class="w3-button w3-white w3-border w3-round-large" type="submit">
	  		<img src="<?php echo $_SESSION['loginProfilePic']; ?>" class="w3-circle" style="height:23px;width:23px" />
	  	</button>
  		<input name="profileToLoad" value="<?php echo $_SESSION['userID']; ?>" type="hidden" />
  	</form>

 </div>
</div>


<!-- Navigation Bar on smaller screens -->
<div id="EKK" class="w3-bar-block w3-theme-blue w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Settings</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Notifications</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- what is included in the container of the page -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
	<!-- Grid work -->
	<div class="w3-row">
		<!-- Left Column -->
		<div class="w3-col m3">
		
            <!-- My Profile section -->
            <div class="w3-card w3-round w3-white">
                <div class="w3-container">
                    <h4 class="w3-center">My Profile</h4>
                    <hr> <p>
                        <?php echo $_SESSION['firstname']; ?>
                        <?php echo $_SESSION['lastname']; ?>
                    </p>

                    <img src="<?php echo $_SESSION['profilepicurl']; ?>" class="w3-circle" style="height:106px;width:106px" alt="Jose">
                    <hr>
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-text-theme"></i> <?php echo $_SESSION['job']; ?> </p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php echo $_SESSION['location']; ?></p>
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo $_SESSION['dob']; ?></p>
                </div>
            </div>
       
      		 <br>
      		 
      		 <!-- Side list -->
      		 <div class= "w3-card w3-round w3-small">
      		 	<div class="w3-white">
      		 		<button onclick="myFunction('Groups')" class="w3-button w3-block w3-theme-blue w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Groups</button>
					<div id="Groups" class="w3-hide w3-container">
						<p>
							<span style="background-color: purple" class = "w3-tag w3-small w3-theme-blue">Spicy Food</span>
							<span style="background-color: lightblue"class = "w3-tag w3-small w3-theme-blue">Sombrero</span>
							<span style="background-color: blue"class = "w3-tag w3-small w3-theme-blue">Friends</span>
							<span style="background-color: pink"class = "w3-tag w3-small w3-theme-blue">Ice Cream</span>
							<span style="background-color: indigo"class = "w3-tag w3-small w3-theme-blue">Kung Fu Fighting</span>
							<span style="background-color: green"class = "w3-tag w3-small w3-theme-blue">Spy Wear</span>
						</p>
					</div>
					
					<button onclick="myFunction('Photos')" class="w3-button w3-block w3-theme-blue w3-left-align"><i class="fa fa-picture-o fa-fw w3-margin-right"></i> My Photos</button>
					<div id="Photos" class="w3-hide w3-container">
					<div class="w3-row-padding">
						<br>
						
						<!-- This Section is the php script which fetches the current users pictures and writes the html code which displays them -->	

						<?php

						if(isset($_SESSION['photosResultArray'])){

							for($i=0; $i<sizeof($_SESSION['photosResultArray']); $i += 4){

								echo '<div class="w3-half">';
								echo '<img src="'.$_SESSION['photosResultArray'][$i+1].'" style="height:55px;width:45px;" class="w3-margin-bottom">';
								echo '<p>'.$_SESSION['photosResultArray'][$i+2].'</p>';
								echo '</div>';

							}
						}
						else{
							echo '<p></p>';
						}

						?>

						<!-- END OF PICTURE DISPLAY PHP SCRIPT -->

         			</div>
          			</div>
					
        		</div>
        	</div>      
      		
      		<br>
      		
      		<!-- End Left Column -->
      		</div>
      		
      		
      		<!-- Middle bit -->
      		<div class ="w3-col m7">
      			
			  	<?php

				  if(isset($_SESSION['timelineResultArray'])){

					  for($i = 0; $i<(count($_SESSION['timelineResultArray']) / 7); $i++){

						  $currentuserid = $_SESSION['timelineResultArray'][($i*7)+0];
						  $currentpicurl = $_SESSION['timelineResultArray'][($i*7)+1];
						  $currentpiccaption = $_SESSION['timelineResultArray'][($i*7)+2];
						  $currentpictimestamp = $_SESSION['timelineResultArray'][($i*7)+3];
						  $currentuserfirstname = $_SESSION['timelineResultArray'][($i*7)+4];
						  $currentuserlastname = $_SESSION['timelineResultArray'][($i*7)+5];
						  $currentuserprofilepicurl = $_SESSION['timelineResultArray'][($i*7)+6];


						  echo '<div class="w3-container w3-card w3-white w3-round w3-margin">';
						  echo '<br> ';
						  echo '<img src="'.$currentuserprofilepicurl.'" class="w3-left w3-circle w3-margin-right" style="width:60px">';
						  echo '<span class="w3-right w3-opacity">'.$currentpictimestamp.'</span>';
						  echo '<form action="redirect.php">';
						  echo '<input name="profileToLoad" type="hidden" value="'.$currentuserid.'" />';
						  echo '<button type="submit" class="w3-button w3-white w3-border w3-round-large">'.$currentuserfirstname.' '.$currentuserlastname.'</button >';
						  echo '</form>';
						  echo '<br>';
						  echo '<hr class="w3-clear">';
						  echo '<p>'.$currentpiccaption.'</p>';
						  echo '<div class="w3-row-padding" style="margin:0 -16px">';
						  echo '<div class="w3-half">';
						  echo '<img src="'.$currentpicurl.'" style="width:100%" alt="Dog" class="w3-margin-bottom">';
						  echo '</div>';
						  echo '</div>';
						  echo '<button type="button" style="background-color: lightblue" class="w3-button w3-theme-blue w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> ';
						  echo '<button type="button" style="background-color: lightblue" class="w3-button w3-theme-blue w3-margin-bottom"><i class="fa fa-share"></i>  Share</button>';
						  echo '</div>';

					  }
				  }
			  	?>
      			
      			
      			<!--  validation bit  -->
      			<a href="https://validator.w3.org/check?uri=referer"> Valid HTML?</a>
      			
      			
      			<!-- End of middle bit -->
      			</div>
      			
      			
      			
        <!-- Right bit -->
        <div class="w3-col m2">
            <div class="w3-card w3-round w3-white ">
                <div class="w3-container">
					<form id="imageUploadForm" method="post" action="newimage.php">
						<h4> Upload your photo</h4>
						<input id="newImageName" type="text" placeholder="Enter a Caption First" />
						<input id="userID" type="hidden" value="<?php echo $_SESSION['userID'];?>" />
						<div class="dropzone"></div>
						<script type="text/javascript" src="imgur.js"></script>
						<script type="text/javascript" src="upload.js"></script>
					</form>
                    <!--<form id = "imgur" action="javascript:;" onsubmit="module.upload()"
                method="post" enctype="multipart/form-data"> <p>
                File <input type="file" name="doc" accept="image/*" data-max-size="5000" required><p>
                Name <input name="user" required> <input type="submit">
                </form>-->


                </div>
            </div>
            <!-- End of right bit -->
        </div>
      			
      	
      </div>
</div>	
      						
      			

<script>
//Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-blue";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-blue", "");
  }
}
//Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}





 
</script>	
	</body>
</html>

