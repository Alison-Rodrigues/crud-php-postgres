<?php
    require_once './src/pages/partials/header.php';
    require_once './connect.php';
    require_once './src/database/db.users.php';

    if(isset($_GET['id'])) {
        $idUser = $_GET['id'];
    }

    if(isset($_POST['id'])) {
        deleteUserDb($pdo, $_POST['id']);
    }
?>

<main class="form-container">
    <form action="./delete.user.php" method="POST" class="form delete">
        <label>Você quer mesmo excluir os dados?</label>
        <input type="hidden" name="id" value="<?= $idUser ?>" required>

        <button type="submit" class="button-submit">Confirmar</button>
        <a href="./list.users.php" class="button-cancel">Cancelar</a>

    </form>
</main><!--form-container-->

<?php require_once './src/pages/partials/footer.php' ?>