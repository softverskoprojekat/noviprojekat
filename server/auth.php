<?php
    session_start();
    if((!isset($_SESSION["valid"]) && $_SESSION["valid"] == false) || (!isset($_SESSION["username"]) && !empty($_SESSION['username']))) {
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'admin-login.php';
        $final_url = 'http://'.$host.$uri.'/'.$extra;
        header('Location:'.$final_url);
        exit();
    }
?>