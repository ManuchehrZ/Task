<?php
define('DBHost', '127.0.0.1');
define('DBPort', 3306);
define('DBName', 'Database');
define('DBUser', 'root');
define('DBPassword', '');

$DB = new Db(DBHost, DBPort, DBName, DBUser, DBPassword);
