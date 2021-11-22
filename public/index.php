<?php

require_once "../vendor/autoload.php";

$route = new \App\Route;

echo '<pre>';
print_r($route->getUrl()); // Testando o método getUrl de Route.php
echo '</pre>';

?>