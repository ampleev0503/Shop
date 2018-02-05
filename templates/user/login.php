<h2>Вход на сайт</h2>

<?php if (isset($errors) && is_array($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li> - <?= $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="/user/login" method="post">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="submit" value="Login">
</form>