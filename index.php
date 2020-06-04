<?php
    include('configurations/config.php');
    include('configurations/fonctions.php');
    $db = $_SESSION['db'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Livre-or</title>
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
    <main id="main_index">
        <header id="haut">
        </header>
        <section id="bas">
            <a href="#haut"><img src="images/divers/header.jpg"></a> -->
            <article>
               
                </div>     
            </article>
        </section>
    </main>
</body>
</html>