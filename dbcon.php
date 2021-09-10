<?php

define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'Mohamad1375');
define('DATABASE', 'php_beginner_crud_level_1');

$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$connection) {
  die('Ridi');
}
