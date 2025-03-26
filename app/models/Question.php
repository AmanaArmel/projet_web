<?php
require_once '../core/Model.php';

class Question extends Model {
    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM questions ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($userId, $title, $body) {
        $stmt = $this->pdo->prepare("INSERT INTO questions (user_id, title, body) VALUES (?, ?, ?)");
        return $stmt->execute([$userId, $title, $body]);
    }
    public function findById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM questions WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
