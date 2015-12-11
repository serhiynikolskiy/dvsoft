<?php

$I = new AcceptanceTester($scenario);
$I->wantTo("Open main page");
$I->amOnPage("/");
$I->maximizeWindow();
$I->see("InternetShop");
$I->wait(1);