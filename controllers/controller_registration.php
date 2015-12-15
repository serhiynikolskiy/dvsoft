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
require_once "views/view_registration.php";
require_once "core/functions.php";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $login=$_POST["login"];
    $password_auth=$_POST["password_auth"];
}
if ($name) {
    if (validation_fields($name, $email, $password)) {
        $salt=generate_salt();
        $password=hash_password($salt, $password);
        include_once "views/view_success_registration.php";
        include_once "models/model_registration.php";
        include_once "views/view_registration.php";
    } else {
        include_once "views/view_unsuccess_registration.php";
    }
} elseif ($login) {
    include_once "models/model_authorisation.php";
    include_once "views/view_registration.php";
        
    $user_pass=$data[0]['password'];
    $salt=$data[0]['salt'];
    $is_success=confirm_password($user_pass, $password_auth, $salt);
    if ($is_success) {
            
        include_once "views/view_success_auth.php";
    } else {
        include_once "views/view_unsuccess_auth.php";
    }
}
?>