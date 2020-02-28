<?php
declare(strict_types=1);

class LoginController {

    public function renderLogin() {
        require 'login.php';
    }

    public function checkCredentials(array $post) {

        $validator = new Validator();

        $validity = $validator->validateLogin($post);

        if ($validity == false) {
            header('Location: http://mysqlintro.local');
        } else {
            $_SESSION['loggedIn'] = true;
            $_SESSION['userId'] = $post['email'];
            header('Location: http://mysqlintro.local');
        }

    }
}