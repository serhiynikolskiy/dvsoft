<?php
	$data=select("users", "email='$login'", "password, salt");
?>