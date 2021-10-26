<?php
//TODOS
// 1) In Each new project, modify the URL_ROUTE to match the base url when rendered by the server
// 2) In Each project, modify the value of the database parameter to fit your needs


/* 
 * __FILE__ is a magic constant that give us the path of this file
 * dirname gives us the directory one level up, we wanted 2 level up so we used it twice
 * that gives us the app route, which is the path to the app folder
 */
define('APP_ROUTE', dirname(dirname(__FILE__)));

/*
 * URL route is used to create url because it is the base url from the server pov
 */
define('URL_ROUTE', 'http://localhost/Projects/Self/learning/udemy/object-oriented-php-mvc/ruthersmith-mvc');

define('SITE_NAME', 'ruthersmith-mvc');

// Database Parameters
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'test');
define('DB_RDBMS', 'mysql');
