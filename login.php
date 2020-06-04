<?php
$error = "";
    include('configurations/config.php');
    include('configurations/fonctions.php');
    $db = $_SESSION['db'];
    if(isset($_POST['connect']))
    {
        $error = login();
    }
    if(isset($login))
    {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/icons/logo.png">
    <title>Connection</title>
</head>
<body id="register_body">
    <main id="register_content">
        <form action="login.php" method="post">
            <input minlength="3" type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="connect" value="Login">
            <a href="register.php">Sign Up</a>
            <?php if($error != ""){echo "<p>$error</p>";}?>
        </form>
    </main>
</body>
</html>