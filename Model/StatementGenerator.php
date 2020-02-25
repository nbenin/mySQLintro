<?php
declare(strict_types=1);

class StatementGenerator {
    public function generateInsert(object $object) : string {
        $statement = 'INSERT INTO student (first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author)
                    VALUES (' . $object->getFirstName() . ',' . $object->getLastName() . ',' . $object->getUsername() . ',' .
                       $object->getLinkedin() . ',' . $object->getGithub() . ',' . $object->getEmail() . ',' . $object->getLang() . ',' .
                       $object->getAvatar() . ',' . $object->getVideo() . ',' . $object->getQuote() . ',' . $object->getQuoteAuthor() . ')';
        var_dump($statement);
        return $statement;
    }
}