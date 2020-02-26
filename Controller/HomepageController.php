<?php
declare(strict_types=1);

class HomepageController {
    public function render($post) {

        // Prepare statement generator
        $statementHandler = new StatementHandler();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Create new Post object
            $userInfo = new Post($post['firstName'], $post['lastName'], $post['username'], $post['linkedin'],
                                $post['github'], $post['email'], $post['language'], $post['avatar'],
                                $post['video'], $post['quote'], $post['quoteAuthor']);

            // Insert new post into database
            $statementHandler->InsertPDO($userInfo);

        }

        // Select users from DB and append to table
        $rowsArray = $statementHandler->selectAllPDO();

        // Load page
        require 'View/homepage.php';
    }

    // Controller for Profile
    public function renderProfile($get) {

        // Prepare statement generator
        $statementHandler = new StatementHandler();

        // Get user ID
        $chosenId = $_GET['user'];


    }
}