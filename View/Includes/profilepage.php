<h1><?php echo $userData['first_name'] . " " . $userData['last_name']; ?>'s Profile </h1>
<img src="<?php echo $userData['avatar']; ?>">
<h3>Also known as: <?php echo $userData['username']; echo '<img width="200" height="100" src="Assets/Img/' . $userData['preferred_language'] . '.svg">' ?></h3>
<section>
    <p><a href="<?php echo $userData['linkedin']; ?>">LinkedIn</a></p>
    <p><a href="<?php echo $userData['github']; ?>">GitHub</a></p>
    <p>Email: <?php echo $userData['email']; ?></p>
</section>
<section>
    <iframe width="560" height="315" src="<?php echo $userData['video']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</section>
<section>
    <p>
        <q><?php echo $userData['quote']; ?></q>
        - <?php echo $userData['quote_author']; ?>
    </p>
</section>
<section>
    <img src="<?php echo 'https://belikebill.ga/billgen-API.php?default=1&name=' . $userData['first_name'] . '&sex=' . $userData['gender']; ?>"/>
</section>
<section>
    <p>Profile created on <?php echo $userData['created_at']; ?></p>
</section>