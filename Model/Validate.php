<?php
declare(strict_types=1);

class Validator {

    public function checkEmailAndPass($input) : bool {

        // Prepare statement generator
        $statementHandler = new StatementHandler();

        $validity = false;

        if($input['password'] !== $input['pwdcheck']) {
            echo 'Passwords Do Not Match';
            return $validity;
        }
        else if (count($statementHandler->selectUserByEmail($input['email'])) !== 0) {
            echo 'Email Is Taken';
            return $validity;
        }
        else {
            $validity = true;
            return $validity;
        }
    }

    public function validateLogin(array $input) : bool {

        // Prepare statement generator
        $statementHandler = new StatementHandler();

        $validity = false;
        $selectedUser = $statementHandler->selectUserByEmail($input['email']);

        if (count($selectedUser) == 0) {
            echo 'Username or Password incorrect';
            return $validity;
        } else if (!password_verify($input['password'], $selectedUser['password'])) {
            return $validity;
        } else {
            $validity = true;
            return $validity;
        }
    }
}