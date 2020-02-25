<?php
declare(strict_types=1);

class StatementGenerator {

    public function preparePDO(object $pdo) : object {

        $base = 'INSERT INTO student(first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        return $pdo->prepare($base);
    }
}