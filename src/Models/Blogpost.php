<?php

require_once __DIR__ . '/../Database.php';

class Blogpost {

    public static function all(): array {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM blogposts WHERE publish=1 ORDER BY date DESC");
        $posts = $stmt->fetchAll();
        for ($i = 0; $i < count($posts); $i++) {
            $cover = Image::find($posts[$i]["cover_id"]);
            $posts[$i]["cover_uri"] = $cover["uri"];
        }
        return $posts;
    }

    public static function allLimit(int $limit): array {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM blogposts WHERE publish=1 ORDER BY date DESC LIMIT ". $limit);
        $posts = $stmt->fetchAll();
        for ($i = 0; $i < count($posts); $i++) {
            $cover = Image::find($posts[$i]["cover_id"]);
            $posts[$i]["cover_uri"] = $cover["uri"];
        }
        return $posts;
    }

    public static function find(string $slug): ?array {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM blogposts WHERE slug = ?");
        $stmt->execute([$slug]);
        $blogpost = $stmt->fetch();
        $cover = Image::find($blogpost["cover_id"]);
        $blogpost["cover_uri"] = $cover["uri"];
        $blogpost["cover_alt"] = $cover["alt"];
        return $blogpost ?: null;
    }

}