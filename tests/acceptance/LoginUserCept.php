<?php

include '_bootstrap.php';

$I = new AcceptanceTester($scenario);
$I->wantTo("Authorisation user");
$I->haveInDatabase('users', [
    'name' =>        $user['user0']['name'],
    'surname' =>     $user['user0']['surname'],
    'phone' =>       $user['user0']['phone'],
    'email' =>       $user['user0']['email'],
    'password' =>    $user['user0']['password'],
    'salt' =>        $user['user0']['salt'],
]);
$I->amOnPage("/");
$I->maximizeWindow();
$I->click("Registration");
$I->fillField("login", "ivan@mail.com");
$I->fillField("password_auth", "123456");
$I->click("submit");
$I->see("Login");
$I->wait(2);
$I->wait(1);