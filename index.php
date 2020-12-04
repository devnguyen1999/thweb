<?php

// Định nghĩa hằng Path của file index.php
define('PATH_ROOT', __DIR__);
define('base_url', 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . str_replace('//', '/', dirname($_SERVER['SCRIPT_NAME']) . '/'));

// Kết nối với database
require_once(PATH_ROOT . '/app/connection.php');

// Autoload class trong PHP
spl_autoload_register(function (string $class_name) {
    include_once(PATH_ROOT . '/' . $class_name . '.php');
});

// load class Route
include_once(PATH_ROOT . '/core/http/Route.php');
$router = new Route();
include_once(PATH_ROOT . '/app/routes.php');

// Lấy url hiện tại của trang web. Mặc định la /
if (!empty($_GET['url'])) {
    $_GET['url'] = chop($_GET['url'], '/');
}
$request_url = !empty($_GET['url']) ? '/' . $_GET['url'] : '/';

// Lấy phương thức hiện tại của url đang được gọi. (GET | POST). Mặc định là GET.
$method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

// map URL
$router->map($request_url, $method_url);
