<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

//defined('DS') ? null : define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'gallery');
define('SITE_ROOT', __DIR__ . DS . '..' . DS . '..');

defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');

require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
require_once("photo.php");
require_once("session.php");

?>