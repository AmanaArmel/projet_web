<?php
require_once '../core/Controller.php';
require_once '../app/models/User.php';

class UserController extends Controller {
    public function register() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new User();
            if ($userModel->create($username, $email, $password)) {
                header("Location: /users/login");
                exit();
            } else {
                echo "Erreur lors de l'inscription.";
            }
        } else {
            $this->render('users/register');
        }
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new User();
            $user = $userModel->findByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: /questions");
                exit();
            } else {
                echo "Identifiants incorrects.";
            }
        } else {
            $this->render('users/login');
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: /users/login");
        exit();
    }
}
?>
