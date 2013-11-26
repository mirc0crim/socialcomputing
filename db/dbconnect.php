<?php
	
	function getLevelStories($level) {
		include('info.php');
		$conn = mysqli_connect("mysql.serversfree.com", $dbName, $password);
		if(! $conn ) {
 		 die('Could not connect: ' . mysql_error());
		}
		
		if (!mysqli_select_db($conn, $dbName)) {
 		 	die('Could not select database: ' . mysql_error());
		}
		$sql = "SELECT * FROM news WHERE level='".$level."'";
		$result = mysqli_query($conn, $sql);
		$returnstring = NULL;
		while ($row = mysqli_fetch_assoc($result)) {
			$returnstring = $returnstring."<div class='title'>".$row['title']."</div><div class='text'>".$row['text']."</div>";
		}
		return 	$returnstring;		
	}
					
?>