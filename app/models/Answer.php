<?php
require_once '../core/Model.php';

class Answer extends Model {
    public function getByQuestion($questionId) {
        $stmt = $this->pdo->prepare("SELECT * FROM answers WHERE question_id = ? ORDER BY created_at ASC");
        $stmt->execute([$questionId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($questionId, $userId, $body) {
        $stmt = $this->pdo->prepare("INSERT INTO answers (question_id, user_id, body) VALUES (?, ?, ?)");
        return $stmt->execute([$questionId, $userId, $body]);
    }
}
?>
