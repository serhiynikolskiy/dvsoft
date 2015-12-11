<?php
$name=$_POST['name'];
$type=$_POST['type_id'];
$price=$_POST['price'];
$image=$_POST['image'];
$logo=$_FILES['logo']['name'];
$description=$_POST['description'];

	/*
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
	*/

	
if (validation_add_product($name, $price, $logo))
{
	include_once("models/model_add_product.php");
	include_once("views/pattern.php");
	include_once("views/view_success_add_product.php");

}
$photo_count=count($_FILES['photos']['tmp_name']);
	
	for($i=0;$i<$photo_count;$i++)
	{
		$tmp_name=$_FILES['photos']['tmp_name'][$i];
		
		if (!$tmp_name)
		{
			continue;
		}
		
		$name=$_FILES['photos']['name'][$i];
		$new_name="./images/".$name;
		
		if (copy($tmp_name,$new_name))
		{
			$photo_name_list[]=$new_name;			
		}		
	}
	$tmp_logo=$_FILES['logo']['tmp_name'];
	$name_logo=$_FILES['logo']['name'];
	$new_name_logo="./images/".$name_logo;
	copy($tmp_logo,$new_name_logo);
?>