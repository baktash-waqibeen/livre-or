<?php
    include('configurations/config.php');
    include('configurations/fonctions.php');
    $db = $_SESSION['db'];
    if(empty($_SESSION['username']))
    {
        header('Location: login.php');
    }
    if(isset($_GET['post_comment']))
    {
        post();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/icons/logo.png">
    <title>Leave a comment</title>
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
            <?php if(isset($login)){echo "<a href=\"index.php?disc\" style=\"color: red;\">Disconnect</a>";}else{ echo "<a href=\"login.php\">Inscription/Connexion</a>";} ?>
        </div>
    </nav>
    <main id="main_livre-or">
        <section id="section_livre-or">
            <div class="post" id="create_post"style="margin-top: 19%;">
                <div id="user_info">
                    <h3 style="text-align: center; color: violet;"><?php echo $login ?></h3>
                </div>
                <div class="user_message">
                    <form action="commentaire.php" method="get" style="height: 80%;">
                      <textarea name="comment" placeholder="Leave a comment here!"></textarea>
                      <input type="submit" name="post_comment" value="Comment">
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>