<?php
// Apache (Web Server)
// PHP
// mySQL (database)
// PHPMYADMIN (tool, GUI-database management)

$username = "w0207";
$password = "FN7a042hOoZF7Wzh";

$host = "localhost";
$database = "w0207";


$link = mysqli_connect($host,$username,$password,$database) or die(mysqli_error($link));

//INSERT INTO {tablename} (title, created_date) VALUES ('Home Appliances', NOW())
//DELETE FROM {tablename} WHERE {category_id} 
//SELECT * FROM {tablename} WHERE ...
//UPDATE {tablename} SET title ='{$title}', modified_date = NOW() WHERE category_id = '{category_id}'

?>