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
echo 1;
if ($_GET['id']) {
    include_once "models/model_product.php";
    include_once "views/view_product.php";
} else {
    include_once "models/main.php";
    include_once "views/main.php";
}
?>