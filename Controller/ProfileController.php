<?php
declare(strict_types=1);

class ProfileController {

    // Controller for Profile
    public function renderProfile($chosenId) {

    // Prepare statement generator
    $statementHandler = new StatementHandler();

    // Get user from table
    $userData = $statementHandler->selectUserById($chosenId);

    require 'profile.php';

    }
}
