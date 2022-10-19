<?php

define('BASEDIR',dirname(__FILE__, 2));
define('VIEWS', BASEDIR . '/App/View/Modules/');

$_ENV['db']['host'] = 'localhost:3307';
$_ENV['db']['user'] = 'joao';
$_ENV['db']['pass'] = '123';
$_ENV['db']['database'] = 'db_login';
