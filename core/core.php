<?php
include_once("routing.php");
include_once("functions.php");
include_once("db.php");

function load_page()
{
	$page=get_page();
	routing_page($page);
}

function get_page()
{
	$result="main";
	$page=explode("/", $_SERVER['REQUEST_URI']);
	$page=$page[1];
	$page=check_parameter($page);
	if ($page)
	{
		$result=$page;
	}
	
	return $result;
}


?>
