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
define('URL_ROUTE', '__YOUR_URL_ROUTE___');

define('SITE_NAME', 'ruthersmith-mvc');

// Database Parameters
define('DB_HOST', 'localhost');
define('DB_USER', '__YOUR_USER');
define('DB_PASS', '__YOUR_PASS__');
define('DB_NAME', '__YOUR_DB_NAME__');
# ONLY TESTED WITH mysql as of now
define('DB_RDBMS', '_WHICH_RDBMS_ARE YOU USING');
