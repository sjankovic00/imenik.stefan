<?php

$router = new \Core\Router();

$router->get('/', 'controllers/index.php');
$router->get('/login', 'controllers/index.php');

$router->post('/login', 'controllers/LogCheck.php');

$router->get('/admin', 'controllers/admin.php');
$router->get('/user', 'controllers/user.php');

$router->get('/member', 'controllers/single.php');



$router->get('/logout', 'controllers/logout.php');

return $router;
