<?php 
   
    define('server', 'localhost');
	define('username', 'root');
	define('password', '');
	define('database', 'crud');

        $conn = new PDO("mysql:host=".server.";dbname=".database,username,password);
  
?>