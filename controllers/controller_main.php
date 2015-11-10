<?php
if($parser = simplexml_load_string(file_get_contents('http://bank-ua.com/export/currrate.xml'))){
	$names = $parser->xpath('/chapter/item/char3');
    $values = $parser->xpath('/chapter/item/rate');
}
else{
    //$error=false;
}
if ($_GET['id'])
{
	include_once("models/model_product.php");
	include_once("views/view_product.php");
}
else
{
	include_once("models/model_main.php");
	include_once("views/view_main.php");
	include_once("core/functions.php");
}
?>