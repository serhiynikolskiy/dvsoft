<?php

include '_bootstrap.php';

$I = new AcceptanceTester($scenario);
$I->wantTo("Authorisation user");
$I->amOnPage("/");
$I->maximizeWindow();
$I->amOnPage("/main?id=11");
$I->click("Add to cart");
$I->wait(1);