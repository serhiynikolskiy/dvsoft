<?php
echo 1;
if ($_GET['id'])
{
	include_once("models/model_product.php");
	include_once("views/view_product.php");
}
else
{
	include_once("models/main.php");
	include_once("views/main.php");
}
?>