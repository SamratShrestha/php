<?php

$database = require 'core/bootstrap.php';

$router = new Router;

require Router::load('routes.php')->direct(Request::uri());

