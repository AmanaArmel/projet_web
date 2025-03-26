<?php
require_once '../core/Controller.php';

class HomeController extends Controller {
    public function index() {
        session_start();
        $this->render('home/index');
    }

    public function docs(){
        session_start();
        $this->render('docs/index');
    }

    public function reactNative(){
        session_start();
        $this->render('docs/react-native');
    }

    public function flutter(){
        session_start();
        $this->render('docs/flutter');
    }
}
?>
