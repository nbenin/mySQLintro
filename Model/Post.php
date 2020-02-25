<?php
declare(strict_types=1);

class Post {
    private $firstName;
    private $lastName;
    private $username;
    private $linkedin;
    private $github;
    private $email;
    private $lang;
    private $avatar;
    private $video;
    private $quote;
    private $quoteAuthor;

    public function __construct(string $firstName, string $lastName, string $username, string $linkedin,
                                string $github, string $email,string $lang, string $avatar, string $video,
                                string $quote, string $quoteAuthor)
    {
        $this->firstName = htmlspecialchars($firstName);
        $this->lastName = htmlspecialchars($lastName);
        $this->username = htmlspecialchars($username);
        $this->linkedin = htmlspecialchars($linkedin);
        $this->github = htmlspecialchars($github);
        $this->email = htmlspecialchars($email);
        $this->lang = htmlspecialchars($lang);
        $this->avatar = htmlspecialchars($avatar);
        $this->video = htmlspecialchars($video);
        $this->quote = htmlspecialchars($quote);
        $this->quoteAuthor = htmlspecialchars($quoteAuthor);
    }

    // Getters
    public function getFirstName() : string {
        return $this->firstName;
    }
    public function getLastName() : string {
        return $this->lastName;
    }
    public function getUsername() : string {
        return $this->username;
    }
    public function getLinkedin() : string {
        return $this->linkedin;
    }
    public function getGithub() : string {
        return $this->github;
    }
    public function getEmail() : string {
        return $this->email;
    }
    public function getLang() : string {
        return $this->lang;
    }
    public function getAvatar() : string {
        return $this->avatar;
    }
    public function getVideo() : string {
        return $this->video;
    }
    public function getQuote() : string {
        return $this->quote;
    }
    public function getQuoteAuthor() : string {
        return $this->quoteAuthor;
    }

}