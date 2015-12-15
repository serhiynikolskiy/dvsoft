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
    insert_product($name, $type, $price, $description, $logo);
    $id=select("products", "name='$name' LIMIT 1", "id");
FOREACH ($_FILES['photos']['name'] as $key=>$value) {
    insert_images($id[0]['id'], $value);
}
    
    
?>