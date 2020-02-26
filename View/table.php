<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Profile</th>
        <th>Language</th>
    </tr>
    <?php
    foreach($rowsArray as $row) {
        echo '<tr>';
        echo '<td>' . $row['first_name'] . '</td>';
        echo '<td>' . $row['last_name'] . '</td>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td><a href="profile.php?user=' . $row['id'] . '">Link to Profile</a></td>';
        echo '<td><img src="../Assets/Img/' . $row['preferred_language'] . '.svg"></td>';
        echo '</tr>';
    }
    ?>
</table>