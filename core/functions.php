<?php

function createSelect($current_option, &$array, $select_name)
{
    $select_str = "<select name=\"$select_name\">";    
    
    for ($i=0;$i<count($array);$i++)
    {
        $id  =$array[$i]["id"];
        $name=$array[$i]["name"];
    
        if ($current_option==$array[$i]["name"]) {
            $select_str.="<option value=\"$id\" selected \">".$name."</option>"; 
        }
        else {
            $select_str.="<option value=\"$id\" \>".$name."</option>"; 
        }
    }
    
    $select_str.="</select>";    
    
    return $select_str;
}
//____________________________________________________________________________________________________________________
function hash_password($salt, $password)
{
    return md5($salt.$password);
}
//____________________________________________________________________________________________________________________
function confirm_password($user_password, $password, $salt)
{
    return $user_password==md5($salt.$password);
}
//____________________________________________________________________________________________________________________
function generate_salt()
{
    $salt=md5(uniqid("some_prefix", true));
    return $salt;    
}
//____________________________________________________________________________________________________________________
function validation_fields($name, $email, $password)
{
    if ($name) {
        if($email) {
            if ($password) {
                return true;
            }
        }
    }
    else { return false; 
    }
}
function validation_add_product($name, $price, $logo)
{
    if($name) {
        if ($price) {
            if($logo) {
                return true;
            }
        }
    }
    else { return false; 
    }
}



?>