<?php

require_once __DIR__ . '/../Database.php';

class Event {

    public static function all(): ?array {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM events WHERE date_begin > NOW() ORDER BY date_begin ASC"); // Zeitspanne Einschränken
        $events = $stmt->fetchAll();
        if (count($events) === 0) return $events;
        for ($i = 0; $i < count($events); $i++) {
            $ur = $pdo->prepare("SELECT * FROM event_registrations WHERE event_id=? AND user_id=?");
            $ur->execute([$events[$i]["id"], $_SESSION["user_id"]]);
            $ureg = $ur->fetch();
            $events[$i]["user_reg"] = $ureg["status"];
            $ur = $pdo->prepare("SELECT COUNT(*) FROM event_registrations WHERE event_id=? AND status='yes'");
            $ur->execute([$events[$i]["id"]]);
            $events[$i]["yes_count"] = $ur->fetchColumn();
        }
        return $events ?: null;
    }

    public static function find(int $id): ?array {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM events WHERE id = ?");
        $stmt->execute([$id]);
        $event = $stmt->fetch();
        $ur = $pdo->prepare("SELECT * FROM event_registrations WHERE event_id=? AND user_id=?");
        $ur->execute([$id, $_SESSION["user_id"]]);
        $ureg = $ur->fetch();
        $event["user_reg"] = $ureg["status"];
        return $event ?: null;
    }

    public static function getRegistrations(int $id): ?array {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM event_registrations WHERE event_id=$id ORDER BY status ASC");
        $regs = $stmt->fetchAll();
        for ($i = 0; $i < count($regs); $i++) {
            $user = User::find($regs[$i]["user_id"]);
            $regs[$i]["name"] = $user["name"];
        }
        return $regs ?: null;
    }

}