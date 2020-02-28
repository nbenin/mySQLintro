<?php
declare(strict_types=1);

require 'Controller/HomepageController.php';
require 'Controller/LoginController.php';
require 'Controller/ProfileController.php';
require 'Controller/RegisterController.php';
require 'Model/Validate.php';
require 'Model/Post.php';
require 'Model/StatementHandler.php';

// Session for login
session_start();

// Instantiate controllers
$homepageControl = new HomepageController();
$loginControl = new LoginController();
$profileControl = new ProfileController();
$registerControl = new RegisterController();

// routing
if ($_SESSION['loggedIn'] == 'true' && isset($_GET['user'])) {
    $profileControl->renderProfile($_GET['user']);
}
else if($_SESSION['loggedIn'] == 'true'){
    $homepageControl->renderHomepage();
}
else if ($_GET['page'] == 'register') {
    $registerControl->renderRegister($_POST);
}
else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $loginControl->checkCredentials($_POST);
    } else {
        $loginControl->renderLogin();
    }
}

