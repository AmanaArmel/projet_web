<?php
require_once '../core/Controller.php';
require_once '../app/models/Answer.php';

class AnswerController extends Controller {
    public function create() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: /users/login");
            exit();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $questionId = $_POST['question_id'];
            $body = $_POST['body'];
            $userId = $_SESSION['user_id'];

            $answerModel = new Answer();
            if ($answerModel->create($questionId, $userId, $body)) {
                header("Location: /questions/show?id=" . $questionId);
                exit();
            } else {
                echo "Erreur lors de la création de la réponse.";
            }
        }
    }
}
?>
