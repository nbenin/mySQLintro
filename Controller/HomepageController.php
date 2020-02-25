<?php
declare(strict_types=1);

class HomepageController {
    public function render($post) {

        // Connect to database
        $pdo = openConnection();
        if ($pdo) {
            echo 'Successfully Connected';
        } else {
            echo 'Connection Problem';
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $statementGenerator = new StatementGenerator();
            $userInfo = new Post($post['firstName'], $post['lastName'], $post['username'], $post['linkedin'],
                                $post['github'], $post['email'], $post['language'], $post['avatar'],
                                $post['video'], $post['quote'], $post['quoteAuthor']);

            $statement = $statementGenerator->preparePDO($pdo);

            $statement->execute([$userInfo->getFirstName(), $userInfo->getLastName(), $userInfo->getUsername(), $userInfo->getLinkedin(),
                                $userInfo->getGithub(), $userInfo->getEmail(), $userInfo->getLang(), $userInfo->getAvatar(),
                                $userInfo->getVideo(), $userInfo->getQuote(), $userInfo->getQuoteAuthor()]);
        }

        // Load page
        require 'View/homepage.php';
    }
}