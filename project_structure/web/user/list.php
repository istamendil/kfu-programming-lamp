<?php

// This is controller or action file
// Connect composer autload
require_once $_SERVER['DOCUMENT_ROOT'].'/../vendor/autoload.php';

// Call model
$users = \Ist\Repository\UserRepository::getAllUsers();

// Show view
include $_SERVER['DOCUMENT_ROOT'].'/../view/users/list.php';

