<?php

function listUsersDb($pdo) {
    $sql = "SELECT * FROM users";

    $statement = $pdo -> query($sql);

    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $users;
}


function createUserDb($pdo, $nome, $cpf, $tel) {
    try {
        $sql = "INSERT INTO users (nome, cpf, tel) VALUES (:nome, :cpf, :tel)";

        $statement = $pdo->prepare($sql);

        if($statement->execute([
            ':nome' => $nome,
            ':cpf' => $cpf,
            ':tel' => $tel,
        ])) {
            $message = 'success-create';
        }
        return header("location: ./list.users.php?message=$message");
        

    } catch (\Throwable) {
        $message = 'error-create';
        return header("location: ./list.users.php?message=$message");
        
    }
}

function deleteUserDb($pdo, $id) {

    try {
        $sql = "DELETE FROM users WHERE id = :id";

        $statement = $pdo -> prepare($sql);

        $statement -> bindParam(':id', $id, PDO::PARAM_INT);

        if($statement->execute()) {
            $message = 'success-delete';
        }

        return header("location: ./list.users.php?message=$message");
            
    } catch (\Throwable) {
        $message = 'error-delete';
        return header("location: ./list.users.php?message=$message");
    }
}

function updateUserDb($pdo, $id, $nome, $cpf, $tel) {
    try {
        $sql = "UPDATE users SET nome = :nome, cpf = :cpf, tel = :tel WHERE id = :id";

        $statement = $pdo -> prepare($sql);

        $statement->bindParam(':nome', $nome, PDO::PARAM_STR);
        $statement->bindParam(':cpf', $cpf, PDO::PARAM_STR);
        $statement->bindParam(':tel', $tel, PDO::PARAM_STR);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        if($statement->execute()) {
            $message = 'success-update';
            return header("location: ./list.users.php?message=$message");
        }
    } catch (\Throwable) {
        $message = 'error-update';
        return header("location: ./list.users.php?message=$message");
        
    }
}