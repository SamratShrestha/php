<?php
$tasks = $app['database']->selectAll('login_info');

require 'views/index.view.php';

