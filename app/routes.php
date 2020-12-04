<?php

// action là callback
$router->get('/error', 'HomeController@error');
$router->get('/', 'HomeController@index');
$router->get('/detail', 'DetailController@index');

$router->get('/admin', 'AdminController@index');
$router->get('/admin/create', 'AdminController@create');
$router->get('/admin/edit', 'AdminController@update');

$router->post('/create', 'AdminController@handleCreate');
$router->post('/edit', 'AdminController@handleUpdate');
$router->get('/delete', 'AdminController@handleDelete');