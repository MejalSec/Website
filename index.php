<?php

require_once 'logs.php';

$ipLogger = new IPLogger();
$ipLogger->logVisitorInfo();

class Router {
    private $base_url = '/portfolio';
    private $routes = [
        '/' => ['controller' => 'MejalSecController', 'method' => 'mejalsec'],
        '/index' => ['controller' => 'MejalSecController', 'method' => 'mejalsec'],
        '/meijasec' => ['controller' => 'MejalSecController', 'method' => 'mejalsec'],
        '/blog' => ['controller' => 'Blog', 'method' => 'blog'],
        '/article-Hello-World' => ['controller' => 'ArticleHelloWorld', 'method' => 'articleHelloWorld'],
        '/design' => ['controller' => 'Design', 'method' => 'design'],
        '/development' => ['controller' => 'Development', 'method' => 'development'],
        '/cybersecurity' => ['controller' => 'Cybersecurity', 'method' => 'cybersecurity'],
        '/maintenance' => ['controller' => 'Maintenance', 'method' => 'maintenance'],
        '/ban' => ['controller' => 'Ban', 'method' => 'ban'],
        '/admin' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/dashboard' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/login' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/register' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/secret' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/config' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/.env' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/backup' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/admin-panel' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/control-panel' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/cpanel' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/manage' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/manager' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/login.php' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/admin.php' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/phpmyadmin' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/pma' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/sql' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/database' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/db' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/data' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/private' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/test' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/tmp' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/temp' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/logs' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/uploads' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/upload' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/files' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/documents' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/.gitignore' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/docker-compose.yml' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/Dockerfile' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/passwords' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/private' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/protected' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/restricted' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/auth' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/authorization' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/account' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/user' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/users' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/member' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/members' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/customer' => ['controller' => 'TrollController', 'method' => 'troll'],
        '/customers' => ['controller' => 'TrollController', 'method' => 'troll'],
    ];

    public function handleRequest() {
        $request_uri = $_SERVER['REQUEST_URI'];
        $path = parse_url($request_uri, PHP_URL_PATH);

        foreach($this->routes as $route => $details) {
            if($_SERVER['REQUEST_METHOD'] === 'GET' && $path === $this->base_url . $route) {
                $controllerFileName = 'controllers/controllers.php';

                if(file_exists($controllerFileName)) {
                    require_once $controllerFileName;

                    $controllerName = $details['controller'];
                    $methodName = $details['method'];

                    if(class_exists($controllerName)) {
                        $controller = new $controllerName();

                        if(method_exists($controller, $methodName)) {
                            $controller->$methodName();
                            exit();
                        }
                    }
                }
            }
        }

        require_once '404.php';
    }
}

$router = new Router();
$router->handleRequest();
