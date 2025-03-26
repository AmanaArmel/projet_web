<?php
require_once '../core/Controller.php';
require_once '../app/models/Question.php';
require_once '../app/models/User.php';
require_once '../app/models/Answer.php';
require_once '../config/auth.php';

class QuestionController extends Controller {
    public function index() {
        $questionModel = new Question();
        $questions = $questionModel->getAll();
        $userModel = new User();
        $users = $userModel->getAll();

        $this->render('questions/index', ['questions' => $questions, 'users' => $users]);
    }

    public function create() {
    

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
        $answerModel = new Answer();
        $question = $questionModel->findById($id);
        $answers = $answerModel->getByQuestion($id);

        if (!$question) {
            echo "Question introuvable.";
            return;
        }

        $this->render('questions/show', ['question' => $question, 'answers' => $answers]);
    }
  

}
?>
