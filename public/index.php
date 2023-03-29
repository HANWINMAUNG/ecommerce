 <?php
session_start();
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

//autoload - အလိုအလျောက် import လုပ်ပေးတာ

spl_autoload_register(function ($class) {
    require base_path(str_replace('\\', '/', $class) . ".php");
});

require base_path('bootstrap.php');

$router = new Core\Router;


$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method =$_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
//require base_path('Core/router.php');

?>
