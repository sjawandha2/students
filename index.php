<?php

//Start a session
session_start();

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Required file
require_once('vendor/autoload.php');
require_once('model/validate.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define arrays
$f3->set('meals', array('breakfast', 'lunch', 'dinner'));
$f3->set('condiments', array('ketchup', 'mayonnaise', 'mustard'));

//Define a default route
$f3->route('GET /', function() {

    echo "<h1>Welcome to my Food Site</h1>";
    echo "<a href='order'>Place an Order</a>";
});

//Define an order route
$f3->route('GET|POST /order', function() {

});

//Run Fat-Free
$f3->run();