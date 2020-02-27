<?php
declare(strict_types=1);

class RegisterController {

    public function renderRegister($post) {

        // Prepare statement generator
        $statementHandler = new StatementHandler();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Create new Post object
            $userInfo = new Post($post['firstName'], $post['lastName'], $post['username'], $post['linkedin'],
                $post['github'], $post['email'], $post['language'], $post['avatar'],
                $post['video'], $post['quote'], $post['quoteAuthor'], $post['gender']);

            // Insert new post into database
            $statementHandler->InsertPDO($userInfo);

            // Log user in
            $_SESSION['loggedIn'] = true;
            $_SESSION['userId'] = $post['email'];
            header('/');

        }
        require 'View/register.php';
    }
}