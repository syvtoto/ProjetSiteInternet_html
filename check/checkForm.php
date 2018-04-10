<?php
require '../includes/pdo.php';

session_start();

try {
    if (isset ($_POST)) {

        $civ = $_POST['civ'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $dateNaissance = $_POST['dateNaissance'];
        $email = $_POST['email'];
        $membre = $_POST['membre'];
        $valide = 1;

        $jeux = "";
        foreach ($_POST['jeux'] as $jeu) {
            $jeux = $jeux . " " . $jeu;
        }

        $sql = "INSERT INTO inscriptions (civilite, nom, prenom, adresse, cp, ville, dateNaissance, email, membre, jeux, valide) 
                VALUES ('$civ', '$nom', '$prenom', '$adresse', '$cp', '$ville', '$dateNaissance', '$email', '$membre', '$jeux', '$valide')";

        $prep = $pdo->prepare($sql);
        $prep->execute();

        $_SESSION['inscrit'] = true;
        header('location:../form.html');
    }
} catch (PDOException $e) {
    echo $e;
}
