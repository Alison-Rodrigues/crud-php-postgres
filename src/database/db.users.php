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

    $statement->execute([
        ':nome' => $nome,
        ':cpf' => $cpf,
        ':tel' => $tel,
    ]);
}