<?php
require_once '../core/Model.php';

class Answer extends Model {
    public function getByQuestion($questionId) {
        $stmt = $this->pdo->prepare("SELECT a.id ,a.body, u.username, a.created_at FROM answers a
                JOIN users u ON a.user_id = u.id
                WHERE a.question_id = ?");
        $stmt->execute([$questionId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($questionId, $userId, $body) {
        $stmt = $this->pdo->prepare("INSERT INTO answers (question_id, user_id, body) VALUES (?, ?, ?)");
        return $stmt->execute([$questionId, $userId, $body]);
    }
}
?>
