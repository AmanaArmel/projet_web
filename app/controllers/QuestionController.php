<?php
require_once '../core/Controller.php';
require_once '../app/models/Question.php';
require_once '../app/models/User.php';

class QuestionController extends Controller {
    public function index() {
        $questionModel = new Question();
        $questions = $questionModel->getAll();
        $userModel = new User();
        $users = $userModel->getAll();

        $this->render('questions/index', ['questions' => $questions, 'users' => $users]);
    }

    public function create() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: /users/login");
            exit();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST['title'];
            $body = $_POST['body'];
            $userId = $_SESSION['user_id'];

            $questionModel = new Question();
            if ($questionModel->create($userId, $title, $body)) {
                header("Location: /questions");
                exit();
            } else {
                echo "Erreur lors de la création de la question.";
            }
        } else {
            $this->render('questions/create');
        }
    }

    public function show($id) {
        $questionModel = new Question();
        $question = $questionModel->findById($id);
        $answers = $questionModel->getAnswers($id);

        if (!$question) {
            echo "Question introuvable.";
            return;
        }

        $this->render('questions/show', ['question' => $question, 'answers' => $answers]);
    }
    public function getAnswers($questionId) {
        $stmt = $this->db->prepare("SELECT a.content, u.username FROM answers a
                JOIN users u ON a.user_id = u.id
                WHERE a.question_id = ?");
        $stmt->execute([$questionId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>
