<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Github</th>
        <th>Language</th>
    </tr>
    <?php
    foreach($rowsArray as $row) {
        echo '<tr>';
        echo '<td>' . $row['first_name'] . '</td>';
        echo '<td>' . $row['last_name'] . '</td>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['github'] . '</td>';
        echo '<td>' . $row['preferred_language'] . '</td>';
        echo '</tr>';
    }
    ?>
</table>