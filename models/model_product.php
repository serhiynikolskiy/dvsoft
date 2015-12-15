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
    $type_sort=$_GET['type'];
if ($_GET['id']) {
    $condition="id='$id'";
}
if ($_GET['type']) {
    if (!empty($conditions)) {
        $conditions+=
            " AND type IN (SELECT id FROM product_type WHERE name='$type_sort')";
    } else {
        $conditions=" type IN (SELECT id FROM product_type WHERE name='$type_sort')";
    }
}
    
    
    
    $product=select("products", $conditions);
    
    $type=$product[0]['type'];
    $result=select("product_type", "id='$type'", "name");
    $product[0]['type']=$result[0]['name'];
    
    $image_list=select("product_gallery", "id='$id'", "");
    $product[0]['image']=$image_list[0]['name'];
    $product=$product[0];
    
    $product_type_list=select("product_type");
    /*
	echo "<pre>";
	print_r($product);
	echo "</pre>";
	*/
?>