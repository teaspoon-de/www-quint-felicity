<?php

require_once __DIR__ . '/../Database.php';

class Image {

    public static function all(): array {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM images ORDER BY taken_at DESC");
        return $stmt->fetchAll();
    }

    public static function find(int $id): ?array {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM images WHERE id = ?");
        $stmt->execute([$id]);
        $image = $stmt->fetch();
        return $image ?: null;
    }

}