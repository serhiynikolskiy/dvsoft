<?php
/**
 * Index.php
 *
 * PHP Version 5
 *
 * @category Ondex
 * @package  MyPackage
 * @author   Nikolskiy Serhiy <serhiy@example.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
if ($parser = simplexml_load_string(
    file_get_contents('http://bank-ua.com/export/currrate.xml')
)) {
    $names = $parser->xpath('/chapter/item/char3');
    $values = $parser->xpath('/chapter/item/rate');
} else {
    //$error=false;
}
if ($_GET['id']) {
    include_once "models/model_product.php";
    include_once "views/view_product.php";
} else {
    include_once "models/model_main.php";
    include_once "views/view_main.php";
    include_once "core/functions.php";
}
?>