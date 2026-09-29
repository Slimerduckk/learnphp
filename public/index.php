<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$values){
    echo '<pre>';
    var_dump(...$values);
    echo '</pre>';
}

spl_autoload_register(function ($class){
    $class = substr($class, strlen('App\\'));
    $class = str_replace('\\', '/', $class);
    require_once __DIR__ . "/../src/$class.php";
});

use App\Controllers\PublicController as PC;

$router = new App\Router();
$db = new App\DB();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
dump($router, $db, $controller);

/*switch($_SERVER['REQUEST_URI']){
    case '/':
        $title = 'World';
        $posts = [
            [
                'title' => 'Some World title 1',
                'date' => 'January 1, 2021',
                'author' => 'mina',
                'body' => 'Some World content 1',
            ],
            [
                'title' => 'Some World title 2',
                'date' => 'January 3, 2021',
                'author' => 'thrall',
                'body' => 'Some World content 2',
            ],
            [
                'title' => 'Some World title 3',
                'date' => 'January 5, 2021',
                'author' => 'duraladon',
                'body' => 'Some World content 3',
            ],
            [
                'title' => 'Some World title 4',
                'date' => 'January 7, 2021',
                'author' => 'haze',
                'body' => 'Some World content 4',
            ],
        ];
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'date' => 'January 1, 2021',
                'author' => 'celeste',
                'body' => 'Some U.S content 1',
            ],
            [
                'title' => 'Some U.S title 2',
                'date' => 'January 3, 2021',
                'author' => 'shion',
                'body' => 'Some U.S content 2',
            ],
            [
                'title' => 'Some U.S title 3',
                'date' => 'January 5, 2021',
                'author' => 'paige',
                'body' => 'Some U.S content 3',
            ],
            [
                'title' => 'Some U.S title 4',
                'date' => 'January 7, 2021',
                'author' => 'venator',
                'body' => 'Some U.S content 4',
            ],
        ];
    default:
        echo '<p style="text-align: center; font-weight: bold; font-size: 48px;">404</p>';
        echo '<br>';
        echo '<img src=meisho-doto-awawa.gif style="width: 30%; height: auto; align: center; display: block; margin-left: auto; margin-right: auto;">';
}*/