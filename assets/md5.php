<?php
    session_start();
    $mdp = md5($_POST['mdp']);
    echo $mdp;

    if($_POST['confirm'] == $mdp || $_POST['confirm'] == 1){
        $_SESSION['username'] = htmlspecialchars($_POST['pseudo']);
        $_SESSION['mail'] = htmlspecialchars($_POST['mail']);
        $_SESSION['auth'] = intval($_POST['level']);
        $_SESSION['tel'] = htmlspecialchars($_POST['tel']);
    }
?>
