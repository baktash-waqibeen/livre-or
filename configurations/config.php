<?php
session_start();
    $_SESSION['db'] = mysqli_connect('localhost', 'root', '', 'livreor');
    if(isset($_SESSION['username']))
    {
        $login = $_SESSION['username'];
    }
    if(isset($_GET['disc']))
    {
        session_destroy();
        header('Location: index.php');
    }
?>