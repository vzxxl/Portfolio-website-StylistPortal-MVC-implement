 <?php 
 
 //Front Controller
 
 //echo "front-controller is running...<br><br>";
 
 
 //1. Общие настройки (Common settings)
 
 ini_set('display_error', 1);
 error_reporting(E_ALL);
 
 //2. Подключение файлов системы (Turning system files on)
 
 define('ROOT', dirname(__FILE__));
 require_once(ROOT.'/components/Router.php');
 require_once(ROOT.'/components/Db.php');
 
 //3. Установка соединения с БД (Connecting DB)
 
 //4. Вызов Router (Calling Router)
 
 $router = new Router();
 $router->run();