<?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
		dump("comment");
		
    }
	else {
		
		render("public/dashboard_system/indexform.php");
	}
?>
