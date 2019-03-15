<?php
    include "lib.php";
    clear_csv("comments.csv");
?>
Data cleared.<br>
Redirecting back in 1 second..
<script>
    setTimeout(function(){
        var url = window.location.href;
        window.location.href = "/ns/index.php";
    }, 1000);
</script>
