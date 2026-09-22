<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$values){
    echo '<pre>';
    var_dump(...$values);
    echo '</pre>';
}


switch($_SERVER['REQUEST_URI']){
    case '/':
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        include __DIR__ . '/../views/us.php';
        break;
    case '/tech':
        include __DIR__ . '/../views/tech.php';
        break;
    default:
        echo '<p style="text-align: center; font-weight: bold; font-size: 48px;">404</p>';
        echo '<br>';
        echo '<img src=meisho-doto-awawa.gif style="width: 30%; height: auto; align: center; display: block; margin-left: auto; margin-right: auto;">';
}