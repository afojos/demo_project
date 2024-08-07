<?php
define("DBNAME","app");
define("DBLOGIN","root");
define("DBPASS","vagrant");

try{
$conn = new PDO("mysql:host=localhost;dbname=".DBNAME,DBLOGIN,DBPASS);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
	}catch(PDOException $e){
		echo $e->getMessage();
		}



?>