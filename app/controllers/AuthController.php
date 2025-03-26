<?php
require_once '../core/Controller.php';
require_once '../app/models/User.php';

class AuthController extends Controller {
    public function register() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new User();
            if ($userModel->create($username, $email, $password)) {
                header("Location: /auth/login");
                exit();
            } else {
                echo "Erreur lors de l'inscription.";
            }
        } else {
            $this->render('auth/register');
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
                header("Location: /");
                exit();
            } else {
                $this->render('auth/login', ['error' => 'Identifiants incorrects.']);
            }
        } else {
            $this->render('auth/login');
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: /auth/login");
        exit();
    }
}
?>
