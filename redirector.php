﻿<!DOCTYPE html><br />
<?php echo "welcome"; ?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>My Page</title>
	</head>
	<body>
		<div id="header">
			<a href="/index.html"><p id="name">Project Social Computing</p></a>
		</div>
		<div class="left">
		</div>
		<div class="right">
			<?php
					include('info.php');
					echo "<p>trying to connect now...</p>";
			
					mysql_connect("mysql.serversfree.com", $userName, $password) or die(mysql_error());
					mysql_select_db($dbName) or die(mysql_error());
					echo "Hello am I reaching heer?";
				if ($_GET["action"] == login){
					$strSQL = "SELECT pw FROM users WHERE name=\"" . $_POST["username"] . "\"";
					$rs = mysql_query($strSQL);
					$row = mysql_fetch_array($rs);
					if ($row["pw"] ==  $_POST["pwd"]){
						echo "<h4>Welcome ", $_POST["username"], "</h4>";
						setcookie("username", $_POST["username"]);
						header("refresh:2; url=index.html");
					} else {
						echo "<h4>Wrong username/password</h4>";
						header("refresh:2; url=login.html");
					}
				} 
				
				else if ($_GET["action"] == register) {
					echo "KAM ", $_POST["pwd"];
					if ($_POST["pwd"] == $_POST["pwd2"]) {
						$strSQL = "SELECT * FROM users WHERE name=\"" . $_POST["username"] . "\"";
						$rs = mysql_query($strSQL);
						$row = mysql_fetch_array($rs);
						if ($row["name"] == ""){
							echo "<h4>Welcome ", $_POST["username"], "</h4>";
							$strSQL = "INSERT INTO users(name,pw) VALUES(\"" . $_POST["username"] . "\",\"" . $_POST["pwd"] . "\")";
							mysql_query($strSQL) or die(mysql_error());
							setcookie("username", $_POST["username"]);
							header("refresh:2; url=index.html");
						} else {
							echo "<h4>Username already taken</h4>";
							header("refresh:2; url=login.html");
						}
					} else {
						echo "<h4>Passwords do not match</h4>";
						header("refresh:2; url=login.html");
					}
				} else if ($_GET["action"] == logout) {
					echo "<h4>See You</h4>";
					setcookie("username", "", time() - 3600);
					header("refresh:2; url=index.html");
				}
				
				mysql_close();
			?>
		</div>
		<?php include('footer.php') ?>
	</body>
</html>