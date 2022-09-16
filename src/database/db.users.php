<?php

function listUsersDb($pdo) {
    $sql = "SELECT * FROM users";

    $statement = $pdo -> query($sql);

    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $users;
}