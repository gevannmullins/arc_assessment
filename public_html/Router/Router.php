<?php

/**
 * Routes
 * This is where all the routes are defined.
 */

// Documentation root
$router->get('/', function() {
    include SCRIPT . "public/index.php";
});

/**
 * WebPages
 */

// Users
$router->get('/web/users', function() {
    include SCRIPT . "public/users.php";
});

// Products
$router->get('/web/products', function() {
    include SCRIPT . "public/products.php";
});

// Transactions
$router->get('/web/transactions', function() {
    include SCRIPT . "public/transactions.php";
});



// install system
$router->get('/install', 'System@index');

/**
 * API endpoints
 */

// users
$router->get('/api/users', 'Users@index');



// products
$router->get('/api/products', 'Products@index');
$router->post('/api/products', 'Products@index');



// transactions
$router->get('/api/transactions', 'Transactions@index');
$router->get('/api/transactions/user/:id', 'Transactions@getTransActionByUserId');
$router->post('/api/transactions', 'Transactions@new_transaction');
$router->put('/api/transactions', 'Transactions@update_transaction');



//
//// books router
//$router->get('/books', 'Books@books');
//$router->get('/books/:page', 'Books@books');
//
//// search books
//$router->get('/books/title/:title', 'Books@searchBooksByTitle');
//$router->get('/books/title/:title/:page', 'Books@searchBooksByTitle');
//
//$router->get('/books/isbn/:isbn', 'Books@searchBooksByISBN');
//
//$router->get('/books/author/:author', 'Books@searchBooksByAuthors');
//$router->get('/books/author/:author/:page', 'Books@searchBooksByAuthors');
//
//// authors router
//$router->get('/authors', 'Books@authors');
//$router->get('/authors/:page', 'Books@authors');
//
//// search author
//$router->get('/authors/:author', 'Books@searchBooksByAuthors');
//$router->get('/authors/:author/:page', 'Books@searchBooksByAuthors');
//


/**
 * DBQueries - experimental
 */
//$router->get('/api/v1/dbquery', 'DBQueries@runQuery');
//$router->post('/api/v1/dbquery', 'DBQueries@runQuery');
$router->post('/api/v1/dbquery', 'DBQueries@custom_query');






