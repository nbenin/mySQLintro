<?php
declare(strict_types=1);

require 'Controller/HomepageController.php';
require 'Model/Post.php';
require 'Model/StatementGenerator.php';
require 'Model/connection.php';

$controller = new HomepageController();
$controller->render($_POST);
