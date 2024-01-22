<?php
require_once 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Models\UserModel;

new HomeController();

$user = new UserModel('userTable');
$user->read(1);
$user->getAll();