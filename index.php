<?php
require_once 'config.php';


$request_url = $_SERVER['REQUEST_URI'];
$request_url = preg_replace('{^/'.$root_folder_name.'|/$}', '', $request_url);

$handler = [];

$handler['home'] = function() {
    global $root;
    require_once 'pages/home/index.php';
};

$router = [
    '' => $handler['home'],
];

$router[$request_url]();
