<?php
print_r($_POST);
$name = $_POST['name'];
echo 'Name: '.$name;
$content =  file_get_contents($_FILES['audio']['tmp_name']);
$date = date('YmdHis');
$new_name = $name.$date.".wav";
echo 'New name: '.$new_name;
$fh = fopen("uploaded/".$new_name, 'w') or die("Cannot open file");
fwrite($fh, $content);
fclose($fh);
?>