<?php
declare(strict_types=1);

class StatementHandler {

    private $pdo;

    public function __construct()
    {
        // Connect to database
        $this->pdo = openConnection();
        if ($this->pdo) {
            echo 'Successfully Connected';
        } else {
            echo 'Connection Problem';
        }
    }

    public function InsertPDO(object $userInfo) {

        $insertStatement = $this->pdo->prepare('INSERT INTO student(first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $insertStatement->execute([$userInfo->getFirstName(), $userInfo->getLastName(), $userInfo->getUsername(), $userInfo->getLinkedin(),
            $userInfo->getGithub(), $userInfo->getEmail(), $userInfo->getLang(), $userInfo->getAvatar(),
            $userInfo->getVideo(), $userInfo->getQuote(), $userInfo->getQuoteAuthor()]);
    }

    public function selectAllPDO() : array {
        $rowsArray = [];
        $selectStatement = $this->pdo->query('SELECT first_name, last_name, username, email, preferred_language, id FROM student');
        while ($rows = $selectStatement->fetch()) {
            array_push($rowsArray, $rows);
        }
        return $rowsArray;
    }
}