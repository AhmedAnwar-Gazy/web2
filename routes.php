<?php

$router->get('/', 'controlers/index.php');

$router->get('/about', 'controlers/about.php');

$router->get('/contact', 'controlers/contact.php');

$router->get('/notes', 'controlers/notes/index.php')->only('auth');

$router->get('/note', 'controlers/notes/show.php')->only('auth');
$router->delete('/note', 'controlers/notes/destroy.php');
$router->delete('/note', 'controlers/notes/show.php');
$router->patch('/note', 'controlers/notes/update.php');


$router->get('/notes/Create', 'controlers/notes/create.php');
$router->post('/notes/Create', 'controlers/notes/store.php');

$router->get('/notes/edit', 'controlers/notes/edit.php');


$router->get('/register', 'controlers/registertion/create.php')->only('guest');
$router->post('/register', 'controlers/registertion/store.php');

$router->get('/login', 'controlers/sessions/create.php')->only('guest');
$router->delete('/logout', 'controlers/sessions/destroy.php')->only('auth');
$router->post('/login', 'controlers/sessions/store.php');





$router->get('/home', 'controlers/perfuom/index.php');
$router->get('/perfum', 'controlers/perfuom/show.php');





//test
$router->get('/Carousel', 'views/test/Carousel.php');
$router->get('/checkout', 'views/test/checkout.php');
$router->get('/search', 'controlers/test/search.php');


