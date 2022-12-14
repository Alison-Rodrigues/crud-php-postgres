<?php
    require_once './src/pages/partials/header.php';
    require_once './connect.php';
    require_once './src/database/db.users.php';
    require_once './src/modules/messages.php';

    $users = listUsersDb($pdo);
?>


<main class="card-container">
    <aside class="message-container">
        <?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
    </aside><!--message-container-->
    
    <a href="./create.user.php" class="button-create">Adicionar</a>
    <?php foreach($users as $user): ?>
    <article class="card">
        <div class="info-user">
            <span class="header">Nome</span>
            <span><?= $user['nome'] ?></span>
        </div>
        <div class="info-user">
            <span class="header">Cpf</span>
            <span><?= $user['cpf'] ?></span>
        </div>
        <div class="info-user">
            <span class="header">Contato</span>
            <span><?= $user['tel'] ?></span>
        </div>
        <div class="button">
            <a href="./update.user.php?id=<?= $user['id'] ?>"><img src="/assets/images/botao-editar.png" alt="Ícone de edição" class="icon"></a>
        </div>
        <div class="button">
            <a href="./delete.user.php?id=<?= $user['id']?>"><img src="/assets/images/excluir_icon.png" alt="Ícone para excluir" class="icon"></a>
        </div>
        
        
    </article><!--card-->
    <?php endforeach; ?>
</main><!--card-container-->

<?php require_once './src/pages/partials/footer.php' ?>