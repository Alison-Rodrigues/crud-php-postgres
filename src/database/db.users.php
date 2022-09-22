<?php

function listUsersDb($pdo) {
    $sql = "SELECT * FROM users";

    $statement = $pdo -> query($sql);

    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $users;
}

function createUserDb($pdo, $nome, $cpf, $tel) {
    $sql = "INSERT INTO users (nome, cpf, tel) VALUES (:nome, :cpf, :tel)";

    $statement = $pdo -> prepare($sql);

    

    $message = $statement->execute([
        ':nome' => $nome,
        ':cpf' => $cpf,
        ':tel' => $tel,
    ]) ? 'success-create' : 'error-create';
    return header("location: ./list.users.php?message=$message");
}

function deleteUserDb($pdo, $id) {
    $sql = "DELETE FROM users WHERE id = :id";

    $statement = $pdo -> prepare($sql);

    $statement -> bindParam(':id', $id, PDO::PARAM_INT);

    $message = $statement -> execute() ? 'success-delete' : 'error-delete';
    return header("location: ./list.users.php?message=$message");
}

function updateUserDb($pdo, $id, $nome, $cpf, $tel) {
    $sql = "UPDATE users SET nome = :nome, cpf = :cpf, tel = :tel WHERE id = :id";

    $statement = $pdo -> prepare($sql);

    $statement -> bindParam(':nome', $nome, PDO::PARAM_STR);
    $statement -> bindParam(':cpf', $cpf, PDO::PARAM_STR);
    $statement -> bindParam(':tel', $tel, PDO::PARAM_STR);
    $statement -> bindParam(':id', $id, PDO::PARAM_INT);

    $message = $statement -> execute() ? 'success-update' : 'error-update';
    return header("location: ./list.users.php?message=$message");
}