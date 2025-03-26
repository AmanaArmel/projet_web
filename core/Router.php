<?php
class Router {
    private $routes = [];

    public function add($route, $controllerAction) {
        $this->routes[$route] = $controllerAction;
    }

    public function dispatch($url) {
        // Remove query string if present
        $url = strtok($url, '?');
        
        // Normalize trailing slashes
        $url = rtrim($url, '/');
        
        foreach ($this->routes as $route => $controllerAction) {
            // Replace {id} style placeholders with regex capture groups
            $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<$1>[^/]+)', $route);
            $pattern = '#^' . $pattern . '$#';

            if (preg_match($pattern, $url, $matches)) {
                list($controllerName, $action) = explode('@', $controllerAction);
                
                // Require the controller file
                $controllerPath = "../app/controllers/$controllerName.php";
                if (!file_exists($controllerPath)) {
                    die("Controller file not found: $controllerPath");
                }
                require_once $controllerPath;

                // Create controller instance
                $controller = new $controllerName();

                // Prepare arguments for the method call
                $params = [];
                foreach ($matches as $key => $value) {
                    if (!is_int($key)) {
                        $params[] = $value;
                    }
                }

                // Call the controller method with parameters
                call_user_func_array([$controller, $action], $params);
                return;
            }
        }
    
        // If no route matches
        http_response_code(404);
        echo "404 - Page non trouvée";
    }
}
?>