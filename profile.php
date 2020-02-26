<?php
declare(strict_types=1);

require 'Controller/HomepageController.php';
require 'Model/StatementHandler.php';

$controller = new HomepageController();
$controller->renderProfile($_GET);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
