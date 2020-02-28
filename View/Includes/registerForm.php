<form method="post">
    <label for="firstName">First Name</label><label style="margin-left: 12vw" for="lastName">Last Name</label><br>
    <input type="text" name="firstName" required><input type="text" name="lastName" required>
    <br>
    <br>
    <label for="username">Username</label><br>
    <input type="text" name="username" required>
    <br>
    <br>
    <label for="password">Password</label><label style="margin-left: 12vw;" for="pwdcheck">Re-enter password</label><br>
    <input type="password" name="password" required><input type="password" name="pwdcheck" required>
    <br>
    <br>
    <label for="linkedin">LinkedIn</label><label style="margin-left: 12vw;" for="github">GitHub</label><br>
    <input type="text" name="linkedin" required><input type="text" name="github" required>
    <br>
    <br>
    <label for="email">E-mail</label><br>
    <input type="email" name="email" required>
    <br>
    <br>
    <label for="language">Preferred Language</label><br>
    <select name="language" required>
        <option value="en">English</option>
        <option value="fr">Français</option>
        <option value="nl">Nederlands</option>
        <option value="de">Deutsche</option>
        <option value="es">Español</option>
        <option value="ja">日本語</option>
        <option value="ru">русский</option>
    </select><br>

    <label for="avatar">Avatar</label><label style="margin-left: 12vw;" for="video">Video</label><br>
    <input type="text" name="avatar" required><input type="text" name="video" required>
    <br>
    <br>
    <label for="quote">Quote</label><label style="margin-left: 12vw;" for="quoteAuthor">Quote Author</label><br>
    <input type="text" name="quote" required><input type="text" name="quoteAuthor" required>
    <br>
    <br>
    <label for="gender">Gender</label><br>
    <select name="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
    </select>
    <br>
    <br>
    <button type="submit">Submit Form</button>
</form>