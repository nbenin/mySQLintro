<?php
class HomepageController {
    public function render($userPost) {

        // Connect to database
        $pdo = openConnection();
        if ($pdo) {
            echo 'Successfully Connected';
        } else {
            echo 'Connection Problem';
        }

        // Load page
        require 'View/homepage.php';
    }
}