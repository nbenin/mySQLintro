<?php
declare(strict_types=1);

class HomepageController {
    public function render($post) {

        // Prepare statement generator
        $statementGenerator = new StatementGenerator();
        // Connect to database
        $pdo = openConnection();
        if ($pdo) {
            echo 'Successfully Connected';
        } else {
            echo 'Connection Problem';
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Create new Post object
            $userInfo = new Post($post['firstName'], $post['lastName'], $post['username'], $post['linkedin'],
                                $post['github'], $post['email'], $post['language'], $post['avatar'],
                                $post['video'], $post['quote'], $post['quoteAuthor']);

            // Insert new post into database
            $insertStatement = $statementGenerator->prepareInsertPDO($pdo);

            $insertStatement->execute([$userInfo->getFirstName(), $userInfo->getLastName(), $userInfo->getUsername(), $userInfo->getLinkedin(),
                                $userInfo->getGithub(), $userInfo->getEmail(), $userInfo->getLang(), $userInfo->getAvatar(),
                                $userInfo->getVideo(), $userInfo->getQuote(), $userInfo->getQuoteAuthor()]);
        }

        // Select users from DB and append to table
        $rowsArray = [];
        $selectStatement = $statementGenerator->prepareSelectPDO($pdo);
        while ($rows = $selectStatement->fetch()) {
            array_push($rowsArray, $rows);
        }

        // Load page
        require 'View/homepage.php';
    }
}