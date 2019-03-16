<?php
	include "lib.php";
?>
<h2>Reflected XSS Demo</h2>
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
<textarea value="" placeholder="Write something here.." rows="10" cols="70"></textarea>
<?php
    if($_GET['name']){
        echo "<p>Hello ".$_GET['name']."</p>";
    }
?>
