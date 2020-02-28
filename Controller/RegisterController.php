<?php
declare(strict_types=1);

class RegisterController {

    public function renderRegister($post) {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $validator = new Validator();
            $valid = $validator->checkEmailAndPass($post);

            if ($valid === true) {

                $statementHandler = new StatementHandler();
                // Create new Post object
                $userInfo = new Post($post['firstName'], $post['lastName'], $post['username'], $post['password'] , $post['linkedin'],
                    $post['github'], $post['email'], $post['language'], $post['avatar'],
                    $post['video'], $post['quote'], $post['quoteAuthor'], $post['gender']);

                // Insert new post into database
                $statementHandler->InsertPDO($userInfo);

                // Log user in
                $_SESSION['loggedIn'] = true;
                $_SESSION['userId'] = $post['email'];
                header('Location: http://mysqlintro.local');
            }
            else {
                require 'register.php';
            }
        }
        else {
            require 'register.php';
        }
    }
}