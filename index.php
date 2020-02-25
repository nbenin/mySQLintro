<?php
require 'Controller/HomepageController.php';
require 'Model/StatementGenerator.php';
require 'Model/connection.php';

$controller = new HomepageController();
$controller->render($_POST);
