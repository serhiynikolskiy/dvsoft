<?php
	insert_product($name, $type, $price, $description, $logo);
	$id=select("products", "name='$name' LIMIT 1", "id");
	FOREACH ($_FILES['photos']['name'] as $key=>$value)
	{
		insert_images($id[0]['id'], $value);
	}
	
	
?>