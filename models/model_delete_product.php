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
    $id=$_GET['id'];
    $query="DELETE FROM products WHERE id='$id'";
    $query1="DELETE FROM product_gallery WHERE id='$id'";
    delete($query);
    delete($query1);

?>