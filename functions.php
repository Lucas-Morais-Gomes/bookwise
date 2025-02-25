<?php

function dd(...$dump)
{
    echo '<pre>';
    var_dump($dump);
    echo '<?pre>';

    die();
}

function abort($code)
{
    http_response_code($code);
    echo "Página não encontrada";
    die();
}

function loadController()
{

    $controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

    if (!$controller) $controller = 'index';

    if (!file_exists("controllers/{$controller}.controller.php")) {
        abort(404);
    }

    require "controllers/{$controller}.controller.php";
};
