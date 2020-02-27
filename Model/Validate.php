<?php
declare(strict_types=1);

class Validator {

    public function validateEmailAndPass($input) : bool {

        // Prepare statement generator
        $statementHandler = new StatementHandler();

        $validity = false;
        if($input['password'] !== $input['pwdcheck']) {
            echo 'Passwords Do Not Match';
            return $validity;
        } else if ($statementHandler->selectUserEmail($input['email']) == true) {
            echo 'Username Is Taken';
            return $validity;
        } else {
            $validity = true;
            return $validity;
        }
    }

}