<?php
    require_once './connect.php';
    require_once './src/database/db.users.php';

    $users = listUsersDb($pdo);
?>


<main class="card-container">
    <?php foreach($users as $user): ?>
    <article class="card">
        <span><?= $user['nome'] ?></span>
        <span><?= $user['cpf'] ?></span>
        <span><?= $user['tel'] ?></span>
    </article>
    <?php endforeach; ?>
</main>