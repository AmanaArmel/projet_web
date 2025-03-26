<?php
require_once '../core/Controller.php';
require_once '../app/models/Answer.php';
require_once '../config/auth.php';
class AnswerController extends Controller {
    public function create() {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate input
            $questionId = filter_input(INPUT_POST, 'question_id', FILTER_VALIDATE_INT);
            $body = trim($_POST['body']);

            // Input validation
            if (empty($body)) {
                // Set error message in session
                $_SESSION['error'] = "La réponse ne peut pas être vide.";
                header("Location: /questions/" . $questionId);
                exit();
            }

            $userId = $_SESSION['user_id'];

            $answerModel = new Answer();
            if ($answerModel->create($questionId, $userId, $body)) {
                // Set success message
                $_SESSION['success'] = "Votre réponse a été ajoutée avec succès.";
                header("Location: /questions/" . $questionId);
                exit();
            } else {
                // Set error message
                $_SESSION['error'] = "Erreur lors de la création de la réponse.";
                header("Location: /questions/" . $questionId);
                exit();
            }
        } else {
            // If not a POST request, redirect
            header("Location: /questions");
            exit();
        }
    }
    public function getAnswers($questionId) {
        $stmt = $this->db->prepare("SELECT a.body, u.username FROM answers a
                JOIN users u ON a.user_id = u.id
                WHERE a.question_id = ?");
        $stmt->execute([$questionId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
