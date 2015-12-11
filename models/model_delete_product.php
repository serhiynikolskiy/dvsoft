<?php
	$id=$_GET['id'];
	$query="DELETE FROM products WHERE id='$id'";
	$query1="DELETE FROM product_gallery WHERE id='$id'";
	delete($query);
	delete($query1);

?>