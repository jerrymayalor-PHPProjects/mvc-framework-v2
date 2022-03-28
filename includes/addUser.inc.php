<?php

use Controllers\UsersController;
use Models\Users;

include 'class-autoloader.inc.php';

$name = $_POST['name'];
$age = $_POST['age'];

$userObj = new UsersController();
$userObj->createUser( $name, $age);

// $userObj = new Users( $name, $age );
// $userObj->insertUser( $name, $age);



