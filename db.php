<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ideal';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
