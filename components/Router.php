<?php

class Router {
    
    private $routes;
    
    public function __construct() {
        
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
        //echo 'Router is running...';
        
    }
    
    //Returns request string
    private function getURI() {
         
        if (!empty($_SERVER['REQUEST_URI'])) {
            return $uri = str_replace('/portfolio/andrMVC/', '',$_SERVER['REQUEST_URI']);
        }

    }
    
    public function run() {
        
       //Получить строку запроса (Get the request string)
          $uri = $this->getURI();
          
        
        //Проверить наличие такого запроса в routes (Compare it with the list of routes in routes.php)
        foreach($this->routes as $uriPattern => $path) {
            //Сравниваем $uriPattern и $uri (Compare $uriPattern and $uri)
            if (preg_match("~$uriPattern~", $uri)) {
                
                //Определить внутренний мршрут из внешнего (external path to internal)
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                
                //Определить, какой контроллер и 
                //экшн обрабатывают запрос (call for responsible controller and action)
                $segments = explode('/', $internalRoute);
                
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));
                
                $parameters = $segments;
                
                
                
                //Подключить файл класса-контроллера (Connecting particular controller)
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                
                
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                    //echo '<br><br>Controller file exists in this place: ' . $controllerFile;
                }
                
                //Создать объект, вызвать метод
                $controllerObject = new $controllerName;
                
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
                if ($result != null) {
                    break;
                }
            }
        }
           
           
        //Если есть совпадение, определить, какой контрллер
        //и экшн (метод) обрабатывает запрос (define corresponding controller and method (action))
        
        //Создать объект, вызвать метод (экшн) (Initialize an object and call the method (action))
        
        
    }
}
