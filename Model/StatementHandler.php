<?php
declare(strict_types=1);
require 'connection.php';
class StatementHandler {

    private $pdo;
    public function __construct()
    {
        $this->pdo = openConnection();
    }

    public function InsertPDO(object $userInfo) {

        $insertStatement = $this->pdo->prepare('INSERT INTO student(first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author, gender, password) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $insertStatement->execute([$userInfo->getFirstName(), $userInfo->getLastName(), $userInfo->getUsername(),
            $userInfo->getLinkedin(), $userInfo->getGithub(), $userInfo->getEmail(), $userInfo->getLang(), $userInfo->getAvatar(),
            $userInfo->getVideo(), $userInfo->getQuote(), $userInfo->getQuoteAuthor(), $userInfo->getGender(),
            $userInfo->getPassword()]);
    }

    public function selectAllPDO() : array {
        $rowsArray = [];
        $selectStatement = $this->pdo->query('SELECT first_name, last_name, username, email, preferred_language, id FROM student');
        while ($rows = $selectStatement->fetch()) {
            array_push($rowsArray, $rows);
        }
        return $rowsArray;
    }

    public function selectUserById(string $chosenId) : array {
        $prepareStatement = 'SELECT * FROM student WHERE id=' . $chosenId;
        $selectUserStatement = $this->pdo->query($prepareStatement);
        return $selectUserStatement->fetch();
    }

    public function selectUserByEmail(string $email) : array {
        $prepareStatement = 'SELECT * FROM student WHERE email="' . $email . '"';
        $query = $this->pdo->query($prepareStatement);
        $result = $query->fetch();

        // will return empty array if no user with that email
        if ($result == false) {
            $result = [];
            return $result;
        } else {
            return $result;
        }
    }
}