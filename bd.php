<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'teste_img');

//Criar a conexão com banco de dados usando o PDO
$pdo = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);