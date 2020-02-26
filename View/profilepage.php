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
<h1><?php echo $userData['first_name'] . " " . $userData['last_name']; ?>'s Profile </h1>
<img src="<?php $userData['avatar']; ?>">
<h3>Also known as: <?php echo $userData['username']; echo '<img width="200" height="100" src="Assets/Img/' . $userData['preferred_language'] . '.svg">' ?></h3>
<section>
    <p><a href="<?php echo $userData['linkedin']; ?>">LinkedIn</a></p>
    <p><a href="<?php echo $userData['github']; ?>">GitHub</a></p>
    <p>Email: <?php echo $userData['email']; ?></p>
</section>
<section>
    <video width="320" height="240">
        <source src="<?php $userData['video']; ?>" type="video/mp4">
    </video>
</section>
<section>
    <p>
        <q><?php echo $userData['quote']; ?></q>
        - <?php echo $userData['quote_author']; ?>
    </p>
</section>
<section>
    <p>Profile created on <?php echo $userData['created_at']; ?></p>
</section>
</body>
</html>