<?php
class HomepageController {
    public function render($post) {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userInfo = new Post($post['firstName'], $post['lastName'], $post['username'], $post['linkedin'],
                                $post['github'], $post['email'], $post['language'], $post['avatar'],
                                $post['video'], $post['quote'], $post['quoteAuthor']);
        }
        // Connect to database
        $pdo = openConnection();
        if ($pdo) {
            echo 'Successfully Connected';
        } else {
            echo 'Connection Problem';
        }



        $statement = $pdo->prepare("SELECT * FROM student")->execute($statement);
        var_dump($statement);

        // Load page
        require 'View/homepage.php';
    }
}