<?php
$query="SELECT *  FROM products";
	if ($_GET['sort'])
	{
		if ($_GET['name_order'])
		{
		$query.=" ORDER by name ".$_GET['name_order'];
		}
		if ($_GET['price_order'])
		{
		$query.=" ,price ".$_GET['price_order'];
		}
		//echo $query;
		$product_list=query($query);
	}
	else
	{
	$product_list=select("products");
	}
	
	$product_type_list=select("product_type");
	
	for ($i=0; $i<count($product_list); $i++)
	{
		$id=$product_list[$i]['id'];
		$type=$product_list[$i]['type'];
		$result=select("product_type", "id='$type'", "name");
		$product_list[$i]['type']=$result[0]['name'];
	}
	/*
	echo "<pre>";
	print_r($product_list);
	echo "</pre>";
	*/
?>