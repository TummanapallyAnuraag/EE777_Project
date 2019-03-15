<?php
	include "lib.php";
?>
<link rel="stylesheet" type="text/css" href="style.css">
<a href="/ns/index.php" >Go Back</a>
<?php
	if($_POST['comment']){
		$file = fopen("comments.csv","a");
		fputcsv($file, array($_POST['comment']));
		fclose($file);
	}
?>
<h3>Old Comments:</h3>
<?php
	echo read_csv("comments.csv");
?>
