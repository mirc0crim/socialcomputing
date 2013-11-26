<div id="header">
	<?php
		echo "<a href=\"/index.html\"><p id=\"name\">" . $pageName . "</p></a>";
		if (strlen($_COOKIE["username"])>1) {
			echo "<a href=\"/useraccount.html\"><p id=\"useraccount\">User Account</p></a>";
		} else {
			echo "<a href=\"/login.html\"><p id=\"useraccount\">Log In</p></a>";
		}
	?>
</div>