<?php
	include "lib.php";
?>
<h2>Reflected XSS Demo</h2>
<link rel="stylesheet" type="text/css" href="style.css">
<textarea value="" placeholder="Write something here.." rows="10" cols="70"></textarea>
<?php
    if($_GET['name']){
        echo "<p>Hello ".$_GET['name']."</p>";
    }
?>
