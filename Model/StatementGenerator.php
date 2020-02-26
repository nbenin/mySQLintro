<?php
declare(strict_types=1);

class StatementGenerator {

    public function prepareInsertPDO(object $pdo) : object {

        $base = 'INSERT INTO student(first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        return $pdo->prepare($base);
    }

    public function prepareSelectPDO(object $pdo) : object {
        $base = 'SELECT first_name, last_name, username, email, preferred_language, github FROM student';
        return $pdo->query($base);
    }
}