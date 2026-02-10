<?php

require_once __DIR__ . '/../Database.php';

class Event {

    public static function all(): ?array {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM events WHERE date_begin > NOW() ORDER BY date_begin ASC"); // Zeitspanne Einschränken
        $events = $stmt->fetchAll();
        if (count($events) === 0) return $events;
        return $events ?: null;
    }
    
    public static function nextPublic(): ?array {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM events WHERE date_begin > NOW() AND booked = TRUE AND publish = TRUE ORDER BY date_begin ASC LIMIT 1");
        $stmt->execute();
        return $stmt->fetch() ?: null;
    }

    public static function find(int $id): ?array {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM events WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }


}