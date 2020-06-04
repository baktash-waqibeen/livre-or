<?php
    include('configurations/config.php');
    include('configurations/fonctions.php');
    $db = $_SESSION['db'];
    $query = mysqli_query($db, "SELECT commentaires.commentaire, commentaires.date, utilisateurs.login FROM commentaires INNER JOIN utilisateurs WHERE commentaires.id_utilisateur = utilisateurs.id ORDER BY commentaires.id DESC");
    $result = mysqli_fetch_all($query);
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/icons/logo.png">
    <title>Livre d'r</title>
</head>
<body>
    <nav>
        <div id="user">
            <img src="images/divers/photo-1460467820054-c87ab43e9b59.jpg">
            <?php if(isset($login)){echo "<a style=\"text-decoration: none;\"href=\"profil.php\"><h2>$login</h2></a>";} ?>
        </div>
        <div id="liens">
            <a href="index.php">Homepage</a>
            <a href="livre-or.php">GuestBook</a>
            <a href="commentaire.php">Leave a comment</a>
            <?php if(isset($login)){echo "<a href=\"index.php?disc\" style=\"color: red;\">Disconnect</a>";}else{ echo "<a href=\"login.php\">Sign up / Sign in</a>";} ?>
        </div>
    </nav>
    <main id="main_livre-or">
        <section id="section_livre-or">
            <?php 
                if(!empty($result))
                {
                    $i = 0;
                    foreach($result as $key)
                    {
                        $commentaire = $result[$i][0];
                        $date = $result[$i][1];
                        $auteur = $result[$i][2];
                        echo "<div class=\"post\">
                        <div class=\"user_info\">
                        <p style=\"margin: 0; color: violet;\">$date</p>
                        <h3>$auteur</h3>
                        </div>
                        <div classe=\"user_message\">
                        <p>$commentaire</p>
                        </div>
                        </div>";
                    $i++;
                    }
                }
                else
                {
                    echo "<h1 style=\"text-align: center;\">Aucun commentaire n'a été posté, revenez plus tard ;)</h1>";
                }
            ?>
        </section>
    </main>
</body>
</html>