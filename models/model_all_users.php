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
    $user_list=select("users", "", "name, surname, phone, email");
?>