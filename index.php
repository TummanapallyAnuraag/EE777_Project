<?php
	include "lib.php";
?>
<h2>Stored XSS Demo</h2>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}
	setCookie("ns-cookie","byyhjsdf@3+ertnnnfg",10);
	setCookie("url-cookie",window.location.href,10);
</script>
<form action="submit.php" method="POST">
	<input type="text" name="comment" value="" placeholder="Your Comment" style="width: 500px;">
	<input type="submit" name="submit" value="Submit">
	<a href="clear.php" class="clear">Clear Data</a>
</form>
<div style="border:1px solid grey;padding:1em;">
<h3>Old Comments:</h3>
<?php
	echo read_csv("comments.csv");
?>
</div>
<br>
<div style="border:1px solid grey;padding:1em;">
<h3>Code snippets:</h3>
<pre>
<?php
	echo htmlspecialchars("<script>console.log(1)</script>");
	echo "<br>".htmlspecialchars("<script>alert(1)</script>");
	echo "<br>".htmlspecialchars("<script src='attack.js'></script>");
?>
</pre>
</div>
<a style="background-color:white;" href="/ns/reflected_xss.php?name=anuraag">Reflected XSS Demo</a>
<a style="background-color:white;" href="/ns/reflected_xss.php?name=<script src='attack.js'></script>">Reflected XSS Attack</a><br>
