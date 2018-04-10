<?php
    require '../includes/pdo.php';

    session_start();

    try {
        if (isset ($_GET['valider']) && !isset($_GET['refuser'])) {
            $id = $_GET['valider'];
            $sql = "UPDATE inscriptions SET valide = 2 WHERE id = '$id'";

            $prep = $pdo->prepare($sql);
            $prep->execute();
            var_dump($prep);
            header('location: ../admin.php');
        } else if (isset ($_GET['refuser']) && !isset($_GET['valider'])) {
            $id = $_GET['refuser'];
            $sql = "UPDATE inscriptions SET valide = 0 WHERE id = '$id'";

            $prep = $pdo->prepare($sql);
            $prep->execute();
            var_dump($prep);
            header('location: ../admin.php');
        }
    }
    catch (PDOException $e){
        echo $e;
    }
