<?php
class Router {
    private $routes = [];

    public function add($route, $controllerAction) {
        $this->routes[$route] = $controllerAction;
    }

    public function dispatch($url) {
        $url = parse_url($url, PHP_URL_PATH);

        if (array_key_exists($url, $this->routes)) {
            list($controllerName, $action) = explode('@', $this->routes[$url]);

            require_once "../app/controllers/$controllerName.php";
            $controller = new $controllerName();
            $controller->$action();
        } else {
            echo "404 - Page non trouvée";
        }
    }
}
?>
