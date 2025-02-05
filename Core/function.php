<?php

function base_path($path) {
    return __DIR__ . '/../' . $path;
}
//var_dump(base_path('Core/Router.php'));

function view($path, $data = []) {
    extract($data);
    require base_path("views/$path");
}

function logout()
{
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie(
        'PHPSESSID',
        '',
        time() - 3600,
        $params['path'],
        $params['domain']
    );
}
