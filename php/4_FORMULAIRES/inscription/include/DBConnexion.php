<?php
    try {
	   $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'toto', 'toto',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
    	echo 'Connexion impossible:<br>'.$e->getMessage();
    	exit;
    }