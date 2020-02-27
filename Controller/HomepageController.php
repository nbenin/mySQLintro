<?php
declare(strict_types=1);

class HomepageController {

    public function renderHomepage() {

        // Prepare statement generator
        $statementHandler = new StatementHandler();

        // Select users from DB and append to table
        $rowsArray = $statementHandler->selectAllPDO();

        // Load page
        require 'View/homepage.php';
    }
}