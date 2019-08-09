<?php
$app=[];
$app['config'] = require 'config.php';
require 'Connection.php';
$con = Connection::make($app['config']['database']);
