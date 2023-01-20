<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$config = require_once('config.php');

require_once('core/Router.php');
require_once('core/database/Connection.php');
require_once('core/database/QueryBuilder.php');
require_once('core/Request.php');

return new QueryBuilder(
    Connection::make($config['database'])
);