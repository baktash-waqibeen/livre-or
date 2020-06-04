<?php
$error = "";
    include('configurations/config.php');
    include('configurations/fonctions.php');
    $db = $_SESSION['db'];
    if(isset($_POST['regist']))
    {

        $error = register();
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
    <title>Inscription | Tomorrowland Winter 2019</title>
</head>
<body id="register_body">
    <main id="register_content">
        <form action="register.php" method="post">
            <input minlength="3" type="text" name="username" placeholder="Username" autocomplete="off" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="cpassword" placeholder="Comfirm Password" required>
            <input type="submit" name="regist" value="Sign Up">
            <a href="login.php">Log in</a>
            <?php if($error != ""){echo "<p>$error</p>";}?>
        </form>
    </main>
</body>
</html>