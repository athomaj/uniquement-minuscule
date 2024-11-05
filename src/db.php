
<?php
// src/db.php

function getDbConnection() {
    $db = new PDO('sqlite:./db.sql');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}

function createTable() {
    $db = getDbConnection();
    $db->exec("CREATE TABLE IF NOT EXISTS messages (
        id INTEGER PRIMARY KEY,
        content TEXT
    )");
}

function insertMessage($content) {
    $db = getDbConnection();
    $stmt = $db->prepare("INSERT INTO messages (content) VALUES (:content)");
    $stmt->bindParam(':content', $content);
    $stmt->execute();
}

function getMessages() {
    $db = getDbConnection();
    $stmt = $db->query("SELECT * FROM messages");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
