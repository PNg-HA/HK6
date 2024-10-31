<?php

$dbhost = "mysql-db";
$dbuser = "db_user";
$dbpass = "password";
$dbname = "test_database";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
