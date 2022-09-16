<?php
    require_once './connect.php';
    require_once './src/database/db.users.php';

    $users = listUsersDb($pdo);
?>


<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Tel</th>
        </tr>
    </thead>
    <?php foreach($users as $user): ?>
    <tbody>
        
        <tr>
            <td><?=$user['nome'] ?></td>
            <td><?=$user['cpf'] ?></td>
            <td><?=$user['tel'] ?></td>
            
            </tr>
        
    </tbody>
    <?php endforeach; ?>
</table>