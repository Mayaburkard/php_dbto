<?php
const DB_HOST = 'mysql32.unoeuro.com';
const DB_USER = 'mayaburkard_dk';
const DB_PASS = 'elsker';
const DB_NAME = 'mayaburkard_dk_db';
$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset("utf8"); 
?>