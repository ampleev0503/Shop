<?php if ($flag): ?>
    <p>Данные отредактированы!</p>
<?php else: ?>

<h2>Личные данные</h2>

<form action="/cabinet/edit" method="post">
    <input type="email" name="email" placeholder="Email" value="<?= $user->email ?>" required>
    <input type="text" name="firstName" placeholder="First name" value="<?= $user->firstName ?>" required>
    <input type="text" name="lastName" placeholder="Last name" value="<?= $user->lastName ?>" required>
    <input type="password" name="password" placeholder="New password" required>
    <input type="submit" name="submit" value="Change">
</form>

<?php endif; ?>