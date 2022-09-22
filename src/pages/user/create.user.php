<?php
    require_once './src/pages/partials/header.php';
    require_once './connect.php';
    require_once './src/database/db.users.php';

    if(isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['tel'])) {
        createUserDb($pdo, $_POST['nome'], $_POST['cpf'], $_POST['tel']);
    }

?>

<main class="form-container">
    <form action="./create.user.php" method="POST" class="form">
        <input type="text" name="nome" id="nome" class="input-user" placeholder="Nome" maxlength="50" required>
        <input type="text" name="cpf" id="cpf" class="input-user" placeholder="CPF" maxlength="11" required>
        <input type="text" name="tel" id="tel" class="input-user" placeholder="Telefone" maxlength="11" required>

        <button type="submit" class="button-submit">Adicionar</button>

    </form>
</main><!--form-container-->

<?php require_once './src/pages/partials/footer.php' ?>
