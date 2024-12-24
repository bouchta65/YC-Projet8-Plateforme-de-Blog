<?php
// Paramètres de connexion
$host = 'localhost'; 
$dbname = 'blog_projet'; 
$username = 'Bouchta'; 
$password = '0000'; 

$conn =  mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: ");
}

?>