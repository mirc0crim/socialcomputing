<?php
print_r($_POST);
$name = $_POST['name'];
$title = $_POST['title'];
$level = $_POST['level'];

$content =  file_get_contents($_FILES['audio']['tmp_name']);
$date = date('YmdHis');
$new_name = $title.$date.".wav";
echo 'New name: '.$new_name;
$path = "uploaded/Level".$level."/".$new_name;
$fh = fopen($path, 'w') or die("Cannot open file");
fwrite($fh, $content);
fclose($fh);
include '../db/dbconnect.php';
saveRecordingToDB($new_name, $path);
?>