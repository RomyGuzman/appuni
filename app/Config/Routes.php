<?php

namespace Config;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(); 

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes

 */
$routes->get('/', 'Home::index');
$routes->get('/estudiantes', 'Estudiantes::index');
$routes->get('/estudiantes/(:num)', 'Estudiantes::show/$1');
            
$routes->get('/estudiantes/crear', 'Estudiantes::crear');
$routes->post('/estudiantes/guardar', 'Estudiantes::guardar');
$routes->get('/estudiantes/editar/(:num)', 'Estudiantes::editar/$1');
$routes->post('/estudiantes/actualizar', 'Estudiantes::actualizar');
$routes->get('/estudiantes/eliminar/(:num)', 'Estudiantes::eliminar/$1');   

$routes->get('/cursos', 'Cursos::index');
$routes->get('/cursos/crear', 'Cursos::crear');
$routes->post('/cursos/guardar', 'Cursos::guardar');                
$routes->get('/cursos/editar/(:num)', 'Cursos::editar/$1');
$routes->post('/cursos/actualizar', 'Cursos::actualizar');

$routes->group('admin', static function($routes) {
    $routes->get('dashboard', 'Admin\Dashboard::index');
    $routes->get('users', 'Admin\Users::index');
    $routes->get('settings', 'Admin\Settings::index');
});
