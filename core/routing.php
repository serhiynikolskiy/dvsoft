<?php
function routing_page($page)
{
    switch($page)
    {
    case "main":
        $content="controller_main.php";
        break;
    case "all_users":
        $content="controller_all_users.php";
        break;
    case "action_add_product":
        $content="controller_action_add_product.php";
        break;
    case "registration":
        $content="controller_registration.php";
        break;
    case "product":
        $content="controller_product.php";
        break;
    case "buy_product":
        $content="controller_buy_product.php";
        break;
    case "edit_product":
        $content="controller_edit_product.php";
        break;
    case "edit_action_product":
        $content="controller_edit_action_product.php";
        break;
    case "delete_product":
        $content="controller_delete_product.php";
        break;
    default: 
        $content="controller_404.php";
    }
    if (!strstr($page, "action")) {
        include_once "views/pattern.php";
    }
    else
    {
        include 'controllers/'.$content;
        
    }
    include_once "views/pattern.php";
}

?>