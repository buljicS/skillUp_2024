<?php

require_once '../conf/config.php';

function connectDatabase(string $dsn, array $pdoOptions): PDO
{

    try {
        $pdo = new PDO($dsn, PARAMS['USER'], PARAMS['PASSWORD'], $pdoOptions);
    } catch (\PDOException $e) {
        var_dump($e->getCode());
        throw new \PDOException($e->getMessage());
    }

    return $pdo;
}

$GLOBALS['pdo'] = connectDatabase($dsn, $pdoOptions);

function insertNewComment(array $commentData): bool
{
    $sql = "INSERT INTO comments (fname, mail, comment) VALUES (:fname, :mail, :comment)";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->bindValue(":fname", $commentData['name'], PDO::PARAM_STR);
    $stmt->bindValue(":mail", $commentData['mail'], PDO::PARAM_STR);
    $stmt->bindValue(":comment", $commentData['comment'], PDO::PARAM_STR);
    $isDone = $stmt->execute();
    return $isDone;
}
