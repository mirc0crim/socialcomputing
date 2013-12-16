<?php
	
	function getLevelStories($level) {
		include('info.php');
		$conn = mysqli_connect("mysql.serversfree.com", $userName, $password);
		if(! $conn ) {
 		 die('Could not connect: '.mysqli_connect_error());
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
		mysqli_close($conn);
		return 	$returnstring;		
	}
	
	function getLevelTitles($level) {
		include('info.php');
		$conn = mysqli_connect("mysql.serversfree.com", $userName, $password);
		if(! $conn ) {
 		 die('Could not connect: '.mysqli_connect_error());
		}
		
		if (!mysqli_select_db($conn, $dbName)) {
 		 	die('Could not select database: ' . mysqli_error($conn));
		}
		$sql = "SELECT * FROM news WHERE level='".$level."'";
		$result = mysqli_query($conn, $sql);
		$returnstring = NULL;
		while ($row = mysqli_fetch_assoc($result)) {
			$newTitle = str_replace(" ", "_", $row['title']);
			$returnstring = $returnstring."<div class='title'><a href='level.php?level=".$level."&title=".$newTitle."'>".$row['title']."</a></div>";
		}
		mysqli_close($conn);
		return 	$returnstring;		
	}
	
	function getLevelLesson($level, $title) {
		include('info.php');
		$conn = mysqli_connect("mysql.serversfree.com", $userName, $password);
		if(! $conn ) {
 		 die('Could not connect: '.mysqli_connect_error());
		}
		
		if (!mysqli_select_db($conn, $dbName)) {
 		 	die('Could not select database: ' . mysql_error());
		}
		$sql = "SELECT * FROM news WHERE level='".$level."' AND title='".$title."'";
		$result = mysqli_query($conn, $sql);
		$returnstring = NULL;
		while ($row = mysqli_fetch_assoc($result)) {
			$returnstring = $returnstring."<div class='title'>".$row['title']."</div><div class='text'>".$row['text']."</div>";
		}
		mysqli_close($conn);
		return 	$returnstring;		
	}
	
	function saveRecordingToDB($new_name, $path) {
		include('../info.php');
		$conn = mysqli_connect("mysql.serversfree.com", $userName, $password);
		if(! $conn ) {
 		 die('nCould not connect: '.mysqli_connect_error());
		}
		
		if (!mysqli_select_db($conn, $dbName)) {
 		 	die('Could not select database: '.mysqli_error($conn));
		}
		$sql = "INSERT INTO recordings(name, path) VALUES('".$new_name."','recording/".$path."')";
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);
	}
					
?>