<?php
declare(strict_types=1);

class LoginController {

    public function renderLogin() {
        require 'login.php';
    }

    public function checkCredentials($post) {
        $email = $post['email'];
        $password = $post['password'];


    }
}