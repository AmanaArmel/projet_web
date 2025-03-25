<?php
class Controller {
    public function loadModel($model) {
        require_once "../app/models/$model.php";
        return new $model();
    }

    public function render($view, $data = []) {
        extract($data);
        ob_start();
        require "../app/views/$view.php";
        $content = ob_get_clean();
        require "../app/views/layout.php";
    }
}
?>
