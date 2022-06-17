<?php
require_once "../../../vendor/autoload.php";
require_once "../../../index.php";

use \App\Services\UserService;
use \App\Utilities\Response;


$UserService = new UserService();
// $UserService->createUser('d');