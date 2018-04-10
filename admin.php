<!DOCTYPE html>
<html lang="fr,en">
<head>
    <?php require 'includes/head.html'; ?>
    <title>Bar des MJ</title>
</head>
<body>
<?php require 'includes/header.html'; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 MainC">
            <div class="row left top center">
                <?php
                session_start();
                require 'includes/pdo.php';
                if (!isset($_SESSION['admin'])) {
                    header('location: login.html');
                } else {
                ?>
                <a href="logout.php">Retour à la taverne</a>
            </div>
            <div class="row left">
                <?php
                //Affichage pour admin
                $sql = 'SELECT * FROM inscriptions ORDER BY valide';
                $prep = $pdo->prepare($sql);
                $prep->execute();
                $inscrits = $prep->fetchAll();
                ?>
                <div class="center"><h2>Participants à valider</h2></div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Civilité</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Code Postal</th>
                        <th>Ville</th>
                        <th>Date Naissance</th>
                        <th>Email</th>
                        <th>Membre</th>
                        <th>Jeux</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        foreach ($inscrits

                        as $inscrit) {
                        if ($inscrit['valide'] == 1) {
                        $id = $inscrit['id']; ?>
                        <th><?php echo $inscrit['civilite'] ?></th>
                        <th><?php echo $inscrit['nom'] ?></th>
                        <th><?php echo $inscrit['prenom'] ?></th>
                        <th><?php echo $inscrit['adresse'] ?></th>
                        <th><?php echo $inscrit['cp'] ?></th>
                        <th><?php echo $inscrit['ville'] ?></th>
                        <th><?php echo $inscrit['dateNaissance'] ?></th>
                        <th><?php echo $inscrit['email'] ?></th>
                        <th><?php echo $inscrit['membre'] ?></th>
                        <th><?php echo $inscrit['jeux'] ?></th>
                        <th>
                            <form method="get" action="check/validerInscription.php">
                                <button type="submit" name="valider" value="<?php echo $id; ?>">Valider</button>
                                <button type="submit" name="refuser" value="<?php echo $id; ?>">Refuser</button>
                            </form>
                        </th>
                    </tr>
                    <?php
                    }
                    }
                    ?>
                    </tbody>
                </table>
                <div class="center"><h2>Liste des participants</h2></div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Civilité</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Code Postal</th>
                        <th>Ville</th>
                        <th>Date Naissance</th>
                        <th>Email</th>
                        <th>Membre</th>
                        <th>Jeux</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        foreach ($inscrits as $inscrit) {
                            if ($inscrit['valide'] == 2) {?>
                        <th><?php echo $inscrit['civilite'] ?></th>
                        <th><?php echo $inscrit['nom'] ?></th>
                        <th><?php echo $inscrit['prenom'] ?></th>
                        <th><?php echo $inscrit['adresse'] ?></th>
                        <th><?php echo $inscrit['cp'] ?></th>
                        <th><?php echo $inscrit['ville'] ?></th>
                        <th><?php echo $inscrit['dateNaissance'] ?></th>
                        <th><?php echo $inscrit['email'] ?></th>
                        <th><?php echo $inscrit['membre'] ?></th>
                        <th><?php echo $inscrit['jeux'] ?></th>
                    </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <div class="center"><h2>Participants refusés</h2></div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Civilité</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Code Postal</th>
                        <th>Ville</th>
                        <th>Date Naissance</th>
                        <th>Email</th>
                        <th>Membre</th>
                        <th>Jeux</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        foreach ($inscrits as $inscrit) {
                            if ($inscrit['valide'] == 0) {?>
                                <th><?php echo $inscrit['civilite'] ?></th>
                                <th><?php echo $inscrit['nom'] ?></th>
                                <th><?php echo $inscrit['prenom'] ?></th>
                                <th><?php echo $inscrit['adresse'] ?></th>
                                <th><?php echo $inscrit['cp'] ?></th>
                                <th><?php echo $inscrit['ville'] ?></th>
                                <th><?php echo $inscrit['dateNaissance'] ?></th>
                                <th><?php echo $inscrit['email'] ?></th>
                                <th><?php echo $inscrit['membre'] ?></th>
                                <th><?php echo $inscrit['jeux'] ?></th>
                    </tr>
                        <?php
                            }
                        }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>