<?php
require_once 'user-class.php';
$user = new USER();

if(!$user->isUserLoggedIn())
{
 $user->redirect('../../../private/sub-admin/');
}

if($user->isUserLoggedIn()!="")
{
 $user->logout();
 $user->redirect('../../../private/sub-admin/');
}
?>