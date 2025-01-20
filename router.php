<?php

use Src\Router;

//dd(Router::getRoute());

if (Router::isApiCall()) {
    require 'routes/api.php';
    exit();
}
require 'routes/web.php';


