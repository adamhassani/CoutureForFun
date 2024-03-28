<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "baseDonnée.sql";

if (isset($_POST['inscrire'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    echo '<script>alert("coucou")</script>';

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Clients(nom, prenom, mail, motDePasse) VALUES ('$nom', '$prenom', '$mail', '$mdp');";
    $conn->exec($sql);
    $conn = null;
    
}
?>

