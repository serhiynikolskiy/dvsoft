<?php

$I = new AcceptanceTester($scenario);
$I->wantTo("Open main page");
$I->amOnPage("/");
$I->maximizeWindow();
$I->click("Registration");
$I->fillField("name", "Ivan");
$I->fillField("surname", "Popov");
$I->fillField("phone", "0507777777");
$I->fillField("email", "ivan@mail.com");
$I->fillField("password", "123456");
$I->click("submit");
$I->see("Login");
$I->wait(2);