<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
	<title>EEK</title>
	<h>Please upload a profile picture to link to your account</h>
	<br />
	<input id="userID" type="hidden" value="<?php session_start(); echo $_SESSION['userID']; ?>" />
	<div class="dropzone"></div>
	<script type="text/javascript" src="imgur.js"></script>
	<script type="text/javascript" src="uploadProfilePic.js"></script>
</body>
</html>