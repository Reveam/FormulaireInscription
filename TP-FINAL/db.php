<?php

$server = "localhost"; 
$user = "root";
$pass = "root";
$database = "tp_final_carmen";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('La connexion a échoué')</script>");
}

$pdo= new PDO('mysql:dbname=tp_final_carmen;host=localhost','root','root');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // ICI DOIT APPARAITRE LA CONNECTION AVEC LA BASE DE DONNEES
   // ET LA GESTION DES ERREURS
?>